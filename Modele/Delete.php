<?php

function Delete_Personne($Id)
{
  $link = InitPDO();
  $Requete = "DELETE FROM tb_personne WHERE Id = '$Id'";
  $stmt = $link->prepare($Requete);
  $stmt->execute();
}


?>
