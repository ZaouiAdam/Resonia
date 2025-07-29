<?php

function Update_Personne($Id, $Nom, $Id_Categorie)
{
  $link = InitPDO();
  $Requete =  "UPDATE tb_personne SET Nom = '$Nom', Id_Categorie = '$Id_Categorie' WHERE Id = '$Id'";
  $stmt = $link->prepare($Requete);
  return $stmt->execute();
}

function Update_Affiniter($Id, $Codex, $Nom, $Description, $Risque)
{
  $link = InitPDO();
  $Requete =  "UPDATE tb_affinite SET Codex = '$Codex', Nom = '$Nom', Description = '$Description', Risque = '$Risque' WHERE Id = '$Id'";
  $stmt = $link->prepare($Requete);
  return $stmt->execute();
}


 ?>
