<?php


  echo "<html>
          <head>";

  include_once "Include/head.php";

  echo "</head>
        <body>";

  /******************************************************************* Récuperation de l'URL **********************************/
  if (empty($_GET['Controller'])) {
    $urlplus = 0;
  }else {
    $urlplus = $_GET['Controller'];
  }


  echo '<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <ul class="nav navbar-nav" style="text-align:center;">
              <li><img class="navbar-logo" src="image/Logo_Main.jpg" width="50px"/></li>
            </ul>
            <ul class="nav navbar-nav">';

  if ($urlplus == 'ConsultationAffiniter' || $urlplus == '0') {
    echo '<li class="active"><a href="?Controller=ConsultationAffiniter">Consultation affinitées</a></li>';
  }else {
    echo '<li><a href="?Controller=ConsultationAffiniter">Consultation affinitées</a></li>';
  }

  if ($urlplus == 'CreationPersonne') {
    echo '<li class="active"><a href="?Controller=CreationPersonnage">Creation de profil</a></li>';
  }else {
    echo '<li><a href="?Controller=CreationPersonne">Creation de profil</a></li>';
  }

  if ($urlplus == 'GestionPersonne') {
    echo '<li class="active"><a href="?Controller=GestionPersonne">Gestion des profils</a></li>';
  }else {
    echo '<li><a href="?Controller=GestionPersonne">Gestion des profils</a></li>';
  }

  if ($urlplus == 'GestionAffiniter') {
    echo '<li class="active"><a href="?Controller=GestionAffiniter">Gestion des affinitées</a></li>';
  }else {
    echo '<li><a href="?Controller=GestionAffiniter">Gestion des affinitées</a></li>';
  }


  echo '</ul>
      </div>
    </nav><br><br><br>
    <div class="container" style="background-color: white;border-radius:10px;">';

  /************************************************************* Connexion au differentes pages **********************************/
  switch ($urlplus){
    case 'ConsultationAffiniter':
      include_once "Controlleur/controleur_ConsultationAffiniter.php";
      break;
    case 'CreationPersonne':
      include_once "Controlleur/controleur_CreationPersonne.php";
      break;
    case 'GestionPersonne':
      include_once "Controlleur/controleur_GestionPersonne.php";
      break;
    case 'GestionAffiniter':
      include_once "Controlleur/controleur_GestionAffiniter.php";
      break;
    case '0':
      header("Location: ".$_SERVER['PHP_SELF']."?Controller=ConsultationAffiniter");
      break;

  }

  echo '</div></body></html>';
?>
