<?php

function Select_Categorie_Ordonnee_Et_Abscisse_Personne($Vie, $Action ,$Pensee ,$Volonte)
{
  $link = InitPDO();
  $Requete = "SELECT * FROM tb_categories WHERE Vie = '$Vie' AND Action = '$Action' AND Pensee = '$Pensee' AND Volonte = '$Volonte'";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
  $tb_categories = $stmt->fetchAll();
  foreach ($tb_categories as $tb_categories_key) {
    return $tb_categories_key['Id'];
  }
}

function Select_Personne()
{
  $link = InitPDO();
  $Requete = "SELECT * FROM tb_personne ORDER BY Nom ASC";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
  return $stmt->fetchAll();
}

function Select_Personne_by_Id($Id)
{
  $link = InitPDO();
  $Requete = "SELECT * FROM tb_personne WHERE Id = $Id ORDER BY Nom ASC";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
  return $stmt->fetchAll();
}

function Select_Categorie_Personne($Id_Categorie)
{
  $link = InitPDO();
  $Requete = "SELECT * FROM tb_categories WHERE Id = '$Id_Categorie'";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
  return $stmt->fetchAll();
}

function Select_Affiniter()
{
  $link = InitPDO();
  $Requete = "SELECT * FROM tb_affinite ORDER BY Type ASC";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
  return $stmt->fetchAll();
}

function Select_Affinite_By_Type($Type)
{
  $link = InitPDO();
  $Requete = "SELECT * FROM tb_affinite WHERE Type = '$Type'";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
  return $stmt->fetchAll();
}


 ?>
