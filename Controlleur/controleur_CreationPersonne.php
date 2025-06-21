<?php

  if (!empty($_POST['Nom']) && !empty($_POST['ForceVie']) && !empty($_POST['AxeAction']) && !empty($_POST['AxePensee']) && !empty($_POST['AxeVolonte']) && !empty($_POST['submit'])) {

    $Nom = Verification_Caractere($_POST['Nom']);
    $Vie = $_POST['ForceVie'];
    $Action = $_POST['AxeAction'];
    $Pensee = $_POST['AxePensee'];
    $Volonte = $_POST['AxeVolonte'];

    if (($Vie != $Action && $Vie != $Pensee && $Vie != $Volonte) && ($Action != $Pensee && $Action != $Volonte) && ($Pensee != $Volonte)) {
      Insert_Personne($Nom,Select_Categorie_Ordonnee_Et_Abscisse_Personne($Vie, $Action ,$Pensee ,$Volonte));
      header("Location: ".$_SERVER['PHP_SELF']."?Controller=ConsultationAffiniter");
    }else {
      $Error = "1";
      include_once "Vue/CreationPersonne/index.php";
    }
  }else {
    $Error = "0";
    include_once "Vue/CreationPersonne/index.php";
  }



?>
