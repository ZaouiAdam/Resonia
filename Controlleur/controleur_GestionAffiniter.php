<?php

  $Succes = "0";
  $NomModifier = "0";

  if (!empty($_POST['IdManage'])) {
    $NomModifier = $_POST['Nom'];
    // Modification
    Update_Affiniter(Verification_Caractere($_POST['IdManage']), Verification_Caractere($_POST['Codex']), Verification_Caractere($_POST['Nom']), Verification_Caractere($_POST['Description']), Verification_Caractere($_POST['Risque']));
    $Succes = "1";
  }

  $Affiniter = Select_Affiniter();

  // Affichage
  include_once "Vue/GestionAffiniter/index.php";





?>
