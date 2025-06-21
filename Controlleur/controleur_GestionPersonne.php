<?php

  /********************************************** Initialisation des variables ***************************************************/
  $NomSupprimer = "None";
  $NomModifier = "None";
  $Error = "0";
  $Succes = "0";

  /********************************************************* Suppression **********************************************************/
  if (!empty($_POST['IdToDelete'])) {
    foreach (Select_Personne_by_Id($_POST['IdToDelete']) as $Select_Personne_by_Id_Key) {
      $NomSupprimer = $Select_Personne_by_Id_Key['Nom'];
    }

    Delete_Personne($_POST['IdToDelete']);
    $Succes = "1";
  }

  /********************************************************** Update **************************************************************/
  if (!empty($_POST['IdToManage'])) {
    foreach (Select_Personne_by_Id($_POST['IdToManage']) as $Select_Personne_by_Id_Key) {
      $NomModifier = $Select_Personne_by_Id_Key['Nom'];
    }

    if (Select_Categorie_Ordonnee_Et_Abscisse_Personne($_POST['ForceVie'], $_POST['AxeAction'] ,$_POST['AxePensee'] ,$_POST['AxeVolonte']) == NULL) {
      $Error = "1";
    }else {
      Update_Personne($_POST['IdToManage'], Verification_Caractere($_POST['Nom']),
        Select_Categorie_Ordonnee_Et_Abscisse_Personne($_POST['ForceVie'], $_POST['AxeAction'] ,$_POST['AxePensee'] ,$_POST['AxeVolonte']));
      $Succes = "2";
    }
  }

  /********************************************* Création du tableau de profils ****************************************************/
  $TB_Personne = Select_Personne();
  $TableauDeProfil = array();
  foreach ($TB_Personne as $TB_Personne_Key) {
    foreach (Select_Categorie_Personne($TB_Personne_Key['Id_Categorie']) as $Select_Categorie_Personne_Key) {
      $Profil = array(
        "Id" => $TB_Personne_Key['Id'],
        "Nom" => $TB_Personne_Key['Nom'],
        "Vie" => $Select_Categorie_Personne_Key['Vie'],
        "Action" => $Select_Categorie_Personne_Key['Action'],
        "Pensee" => $Select_Categorie_Personne_Key['Pensee'],
        "Volonte" => $Select_Categorie_Personne_Key['Volonte'],
      );
      array_push($TableauDeProfil, $Profil);
    }
  }

  // Affichage
  include_once "Vue/GestionPersonne/index.php";

?>
