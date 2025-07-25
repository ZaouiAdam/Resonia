<?php

  $PremierePersonne = "0";
  $SecondePersonne = "0";
  $PremiereAffinite = "0";
  $SecondeAffinite = "0";
  $Error = "0";

  $Personne = Select_Personne();

  if (!empty($_POST['PremierePersonne']) && !empty($_POST['SecondePersonne'])) {

    if ($_POST['PremierePersonne'] == $_POST['SecondePersonne']) {
      $Error = "1";
      // Affichage
      include_once "Vue/ConsultationAffiniter/index.php";
    }

    $PremierePersonne = $_POST['PremierePersonne'];
    $SecondePersonne = $_POST['SecondePersonne'];

    foreach (Select_Personne_by_Id($PremierePersonne) as $Categorie_Key) {
      $CategoriePremierePersonne = Select_Categorie_Personne($Categorie_Key['Id_Categorie']);
    }

    foreach (Select_Personne_by_Id($SecondePersonne) as $Categorie_Key) {
      $CategorieSecondePersonne = Select_Categorie_Personne($Categorie_Key['Id_Categorie']);
    }

    $PremierePersonneVie = "";
    $PremierePersonneAction = "";
    $PremierePersonnePensee = "";
    $PremierePersonneD = "";

    $SecondePersonneVie = "";
    $SecondePersonneAction = "";
    $SecondePersonnePensee = "";
    $SecondePersonneD = "";

    foreach ($CategoriePremierePersonne as $CategoriePremierePersonne_key) {
      $PremierePersonneVie = $CategoriePremierePersonne_key['Vie'];
      $PremierePersonneAction = $CategoriePremierePersonne_key['Action'];
      $PremierePersonnePensee = $CategoriePremierePersonne_key['Pensee'];
      $PremierePersonneD = $CategoriePremierePersonne_key['Volonte'];
    }

    foreach ($CategorieSecondePersonne as $CategorieSecondePersonne_key) {
      $SecondePersonneVie = $CategorieSecondePersonne_key['Vie'];
      $SecondePersonneAction = $CategorieSecondePersonne_key['Action'];
      $SecondePersonnePensee = $CategorieSecondePersonne_key['Pensee'];
      $SecondePersonneD = $CategorieSecondePersonne_key['Volonte'];
    }

    $PremiereAffinite = Select_Affinite_By_Type(
      TrouverAffinite($PremierePersonneVie, $SecondePersonneVie, $PremierePersonneAction, $SecondePersonneAction, $PremierePersonnePensee, $SecondePersonnePensee, $PremierePersonneD, $SecondePersonneD)
    );
    $SecondeAffinite = Select_Affinite_By_Type(
      TrouverAffinite($SecondePersonneVie, $PremierePersonneVie, $SecondePersonneAction, $PremierePersonneAction, $SecondePersonnePensee, $PremierePersonnePensee, $SecondePersonneD, $PremierePersonneD)
    );

    $PremierePersonneAffinite = TrouverAffinite($PremierePersonneVie, $SecondePersonneVie, $PremierePersonneAction, $SecondePersonneAction, $PremierePersonnePensee, $SecondePersonnePensee, $PremierePersonneD, $SecondePersonneD);
    $SecondePersonneAffinite = TrouverAffinite($SecondePersonneVie, $PremierePersonneVie, $SecondePersonneAction, $PremierePersonneAction, $SecondePersonnePensee, $PremierePersonnePensee, $SecondePersonneD, $PremierePersonneD);




    // Affichage
    include_once "Vue/ConsultationAffiniter/index.php";
  }else {
    // Affichage
    include_once "Vue/ConsultationAffiniter/index.php";
  }

  function TrouverAffinite($A1, $A2, $B1, $B2, $C1, $C2, $D1, $D2)
  {
    if ($A1 == $A2 && $B1 == $B2 && $C1 == $C2 && $D1 == $D2) {
      return 1;
    }
    if ($A1 == $A2 && $B1 == $C2 && $C1 == $B2 && $D1 == $D2) {
      return 2;
    }
    if ($A1 == $C2 && $B1 == $B2 && $C1 == $A2 && $D1 == $D2) {
      return 3;
    }
    if ($A1 == $B2 && $B1 == $A2 && $C1 == $C2 && $D1 == $D2) {
      return 4;
    }
    if ($A1 == $C2 && $B1 == $A2 && $C1 == $B2 && $D1 == $D2) {
      return 5;
    }
    if ($A1 == $B2 && $B1 == $C2 && $C1 == $A2 && $D1 == $D2) {
      return 6;
    }
    if ($A1 == $A2 && $B1 == $B2 && $C1 == $D2 && $D1 == $C2) {
      return 7;
    }
    if ($A1 == $A2 && $B1 == $D2 && $C1 == $C2 && $D1 == $B2) {
      if (($B1 == "P" && $B2 == "S") || ($B1 == "S" && $B2 == "P") || ($B1 == "G" && $B2 == "SD") || ($B1 == "SD" && $B2 == "G")) {
        return 8; // Harmonieux
      }else {
        return 9; // Faible
      }
    }
    if ($A1 == $A2 && $B1 == $D2 && $C1 == $B2 && $D1 == $C2) {
      return 10;
    }
    if ($A1 == $A2 && $B1 == $C2 && $C1 == $D2 && $D1 == $B2) {
      return 11;
    }
    if ($A1 == $B2 && $B1 == $A2 && $C1 == $D2 && $D1 == $C2) {
      if (($C1 == "P" && $C2 == "S") || ($C1 == "S" && $C2 == "P") || ($C1 == "G" && $C2 == "SD") || ($C1 == "SD" && $C2 == "G")) {
        return 12; // Complémentaire
      }else {
        return 13; // Contradictoire
      }
    }
    if ($A1 == $C2 && $B1 == $A2 && $C1 == $D2 && $D1 == $B2) {
      return 14;
    }
    if ($A1 == $B2 && $B1 == $D2 && $C1 == $A2 && $D1 == $C2) {
      return 15;
    }
    if ($A1 == $D2 && $B1 == $B2 && $C1 == $C2 && $D1 == $A2) {
      return 16;
    }
    if ($A1 == $D2 && $B1 == $A2 && $C1 == $C2 && $D1 == $B2) {
      return 17;
    }
    if ($A1 == $B2 && $B1 == $D2 && $C1 == $C2 && $D1 == $A2) {
      return 18;
    }
    if ($A1 == $D2 && $B1 == $A2 && $C1 == $B2 && $D1 == $C2) {
      return 19;
    }
    if ($A1 == $B2 && $B1 == $C2 && $C1 == $D2 && $D1 == $A2) {
      return 20;
    }
    if ($A1 == $D2 && $B1 == $B2 && $C1 == $A2 && $D1 == $C2) {
      return 21;
    }
    if ($A1 == $C2 && $B1 == $B2 && $C1 == $D2 && $D1 == $A2) {
      return 22;
    }
    if ($A1 == $C2 && $B1 == $D2 && $C1 == $A2 && $D1 == $B2) {
      return 23;
    }
    if ($A1 == $D2 && $B1 == $C2 && $C1 == $B2 && $D1 == $A2) {
      return 24;
    }
    if ($A1 == $C2 && $B1 == $D2 && $C1 == $B2 && $D1 == $A2) {
      return 25;
    }
    if ($A1 == $D2 && $B1 == $C2 && $C1 == $A2 && $D1 == $B2) {
      return 26;
    }
  }


?>
