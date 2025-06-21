<?php
/*****************************************************TB_DEMANDES*********************************************************************/
function Insert_Personne($Nom, $Id_Categorie)
{
  $link = InitPDO();
  $Requete =  "INSERT INTO tb_personne (Nom, Id_Categorie)
  VALUES ('$Nom', '$Id_Categorie')";
  $stmt = $link->prepare($Requete);
  return $stmt->execute();
}


 ?>
