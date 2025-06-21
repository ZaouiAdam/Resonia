<?php

  if ($Error == "1") {
    echo '<center><h1>Consultation Affinitées</h1><h3 style="color:#a51b0b;">🚨 Attention : Vous avez choisit les mêmes personnes !</h3></center><hr>';
  }else {
    echo '<center><h1>Consultation Affinitées</h1></center><hr>';
  }

/******************************************** Titre **************************************************************/

$Titre = '<div class="row">
  <center>
    <div class="col-xs-6">
      <h1>Première personne</h1>
    </div>
    <div class="col-xs-6">
      <h1>Seconde personne</h1>
    </div>
  </center>
</div><br>';

/*********************************************** Création des select **********************************************/

$Selection = '<div class="row">
  <center>
    <div class="col-xs-6">
      <select class="form-control" name="PremierePersonne" required>
        <option value="">Veuillez choisir une personne...</option>';

    foreach ($Personne as $Personne_Key) {
      if ($Personne_Key['Id'] == $PremierePersonne) {
        $Selection = $Selection . '<option value="'.$Personne_Key['Id'].'" selected>'.$Personne_Key['Nom'].'</option>';
      }else {
        $Selection = $Selection . '<option value="'.$Personne_Key['Id'].'">'.$Personne_Key['Nom'].'</option>';
      }
    }

$Selection = $Selection . '</select>
    </div>
    <div class="col-xs-6">
      <select class="form-control" name="SecondePersonne" required>
      <option value="">Veuillez choisir une personne...</option>';

  foreach ($Personne as $Personne_Key) {
    if ($Personne_Key['Id'] == $SecondePersonne) {
      $Selection = $Selection . '<option value="'.$Personne_Key['Id'].'" selected>'.$Personne_Key['Nom'].'</option>';
    }else {
      $Selection = $Selection . '<option value="'.$Personne_Key['Id'].'">'.$Personne_Key['Nom'].'</option>';
    }
  }

$Selection = $Selection . '</select>
    </div>
  </center>
</div><br>';

/*************************************************************** Bouton valider ***************************************/

$Boutonchoix = '<div class="row">
                  <center>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        <input type="submit" style="width:100%;" class="btn btn-success" name="submit" value="Choisir">
                    </div>
                    <div class="col-xs-2"></div>
                  </center>
                </div><br>';


$Tableau = '<div class="row">
              <center>
                <div class="col-xs-6" style="background-color:white;">
                  <br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Risque</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>';

  if ($PremiereAffinite != "0" ) {
    foreach ($PremiereAffinite as $PremiereAffinite_Key) {
      $Tableau = $Tableau . '<td>'.$PremiereAffinite_Key['Nom'].'</td>
                             <td>'.$PremiereAffinite_Key['Description'].'</td>
                             <td>'.$PremiereAffinite_Key['Risque'].'</td>';
    }
  }

$Tableau = $Tableau . '</tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-xs-6" style="background-color:white;">
                  <br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Risque</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>';

  if ($SecondeAffinite != "0" ) {
    foreach ($SecondeAffinite as $SecondeAffinite_Key) {
      $Tableau = $Tableau . '<td>'.$SecondeAffinite_Key['Nom'].'</td>
                             <td>'.$SecondeAffinite_Key['Description'].'</td>
                             <td>'.$SecondeAffinite_Key['Risque'].'</td>';
    }
  }

  $Tableau = $Tableau . '</tr>
                    </tbody>
                  </table>
                </div>
              </center>
            </div>
            <br>';

echo '<form action="" method="post">' . $Titre . $Selection . $Boutonchoix  . '</form>';

if ($PremiereAffinite != "0" || $SecondeAffinite != "0") {
  echo $Tableau;
}



?>
