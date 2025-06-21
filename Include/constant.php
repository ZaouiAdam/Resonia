<?php

  /******************************************** Base de données ***************************************/
  include 'Include/PDO.php';
  $link = InitPDO();

  /********************************************** Requete SQL *****************************************/
  include_once 'Modele/Insert.php';
  include_once 'Modele/Update.php';
  include_once 'Modele/Select.php';
  include_once 'Modele/Delete.php';




?>
