<?php

  function InitPDO(){
    return new PDO('mysql:host=localhost;dbname=resonia', 'root', '');
  }

?>
