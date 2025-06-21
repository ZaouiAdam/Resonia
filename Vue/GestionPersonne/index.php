<?php

  if ($Succes == "0" && $Error == "0") {
    echo '<center><h1>Gestion des profils</h1></center><hr>';
  }
  if ($Succes == "1") {
    echo '<center><h1>Gestion des profils</h1><h3 style="color:#008000;">✅💀 Succés : Le profil "'.$NomSupprimer.'" à été supprimer avec succés.<h3></center><hr>';
  }
 if ($Succes == "2") {
    echo '<center><h1>Gestion des profils</h1><h3 style="color:#008000;">✅🔄 Succés : Le profil "'.$NomModifier.'" à été modifié avec succés.<h3></center><hr>';
  }
  if ($Error == "1") {
    echo '<center><h1>Gestion des profils</h1><h3 style="color:#a51b0b;">🚨 Attention : Deux attributs ou plus ne peuvent pas avoir la même maison !</h3></center><hr>';
  }

  $Tableau = '<div class="row">
                <div class="col-xs-12" style="background-color:white;border-radius:10px;">
                  <br>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Vie</th>
                        <th>Action</th>
                        <th>Pensee</th>
                        <th>Volonté</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>';

  $Compteur = 0;
  foreach ($TableauDeProfil as $TableauDeProfil_Key) {
    $Compteur++;
    $Tableau = $Tableau . '<tr>
                            <td>'.$Compteur.'</td>
                            <td>'.$TableauDeProfil_Key['Nom'].'</td>';

                            // Vie
                            switch ($TableauDeProfil_Key['Vie']) {
                              case 'G':
                                $Tableau = $Tableau . '<td style="background-color:#DA6C6C;color:white;"><center>'.$TableauDeProfil_Key['Vie'].'</center></td>';
                                break;
                              case 'S':
                                $Tableau = $Tableau . '<td style="background-color:#A7C1A8;color:black;"><center>'.$TableauDeProfil_Key['Vie'].'</center></td>';
                                break;
                              case 'SD':
                                $Tableau = $Tableau . '<td style="background-color:#687FE5;color:white;"><center>'.$TableauDeProfil_Key['Vie'].'</center></td>';
                                break;
                              case 'P':
                                $Tableau = $Tableau . '<td style="background-color:#F2E2B1;color:black;"><center>'.$TableauDeProfil_Key['Vie'].'</center></td>';
                                break;
                            }
                            // Action
                            switch ($TableauDeProfil_Key['Action']) {
                              case 'G':
                                $Tableau = $Tableau . '<td style="background-color:#DA6C6C;color:white;"><center>'.$TableauDeProfil_Key['Action'].'</center></td>';
                                break;
                              case 'S':
                                $Tableau = $Tableau . '<td style="background-color:#A7C1A8;color:black;"><center>'.$TableauDeProfil_Key['Action'].'</center></td>';
                                break;
                              case 'SD':
                                $Tableau = $Tableau . '<td style="background-color:#687FE5;color:white;"><center>'.$TableauDeProfil_Key['Action'].'</center></td>';
                                break;
                              case 'P':
                                $Tableau = $Tableau . '<td style="background-color:#F2E2B1;color:black;"><center>'.$TableauDeProfil_Key['Action'].'</center></td>';
                                break;
                            }
                            // Pensee
                            switch ($TableauDeProfil_Key['Pensee']) {
                              case 'G':
                                $Tableau = $Tableau . '<td style="background-color:#DA6C6C;color:white;"><center>'.$TableauDeProfil_Key['Pensee'].'</center></td>';
                                break;
                              case 'S':
                                $Tableau = $Tableau . '<td style="background-color:#A7C1A8;color:black;"><center>'.$TableauDeProfil_Key['Pensee'].'</center></td>';
                                break;
                              case 'SD':
                                $Tableau = $Tableau . '<td style="background-color:#687FE5;color:white;"><center>'.$TableauDeProfil_Key['Pensee'].'</center></td>';
                                break;
                              case 'P':
                                $Tableau = $Tableau . '<td style="background-color:#F2E2B1;color:black;"><center>'.$TableauDeProfil_Key['Pensee'].'</center></td>';
                                break;
                            }
                            // Volonte
                            switch ($TableauDeProfil_Key['Volonte']) {
                              case 'G':
                                $Tableau = $Tableau . '<td style="background-color:#DA6C6C;color:white;"><center>'.$TableauDeProfil_Key['Volonte'].'</center></td>';
                                break;
                              case 'S':
                                $Tableau = $Tableau . '<td style="background-color:#A7C1A8;color:black;"><center>'.$TableauDeProfil_Key['Volonte'].'</center></td>';
                                break;
                              case 'SD':
                                $Tableau = $Tableau . '<td style="background-color:#687FE5;color:white;"><center>'.$TableauDeProfil_Key['Volonte'].'</center></td>';
                                break;
                              case 'P':
                                $Tableau = $Tableau . '<td style="background-color:#F2E2B1;color:black;"><center>'.$TableauDeProfil_Key['Volonte'].'</center></td>';
                                break;
                            }

    $Tableau = $Tableau .  '<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ManageProfil'.$TableauDeProfil_Key['Id'].'">Modifier</button>
                            <div class="modal fade" id="ManageProfil'.$TableauDeProfil_Key['Id'].'" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Gestion du profil : "'.$TableauDeProfil_Key['Nom'].'"</h4>
                                  </div>
                                  <div class="modal-body">
                                      <form action="" method="post">
                                        <input type="hidden" name="IdToManage" value="'.$TableauDeProfil_Key['Id'].'">
                                        <h1>Nom :</h1>
                                        <div class="form-group">
                                          <input type="text" name="Nom" class="form-control" value="'.$TableauDeProfil_Key['Nom'].'">
                                        </div>
                                        <div class="row">
                                          <center>
                                            <div class="col-xs-12">
                                              <h1>Force de vie : 🧬</h1>
                                            </div>
                                            <br>
                                            <div style="margin-top:50px;"></div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Gryffondor</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>';
                                                if ($TableauDeProfil_Key['Vie'] == "G") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="G" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="G">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serpentard</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>';
                                                if ($TableauDeProfil_Key['Vie'] == "S") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="S" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="S">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serdaigle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>';
                                                if ($TableauDeProfil_Key['Vie'] == "SD") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="SD" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="SD">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Poufsouffle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>';
                                                if ($TableauDeProfil_Key['Vie'] == "P") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="P" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="ForceVie" value="P">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                          </center>
                                        </div>
                                        <div class="row">
                                          <center>
                                            <div class="col-xs-12">
                                              <h1>Axe daction : 🏃‍</h1>
                                            </div>
                                            <br>
                                            <div style="margin-top:50px;"></div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Gryffondor</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>';
                                                if ($TableauDeProfil_Key['Action'] == "G") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="G" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="G">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serpentard</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>';
                                                if ($TableauDeProfil_Key['Action'] == "S") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="S" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="S">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serdaigle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>';
                                                if ($TableauDeProfil_Key['Action'] == "SD") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="SD" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="SD">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Poufsouffle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>';
                                                if ($TableauDeProfil_Key['Action'] == "P") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="P" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeAction" value="P">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                          </center>
                                        </div>
                                        <div class="row">
                                          <center>
                                            <div class="col-xs-12">
                                              <h1>Axe de pensée : 🧠</h1>
                                            </div>
                                            <br>
                                            <div style="margin-top:50px;"></div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Gryffondor</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>';
                                                if ($TableauDeProfil_Key['Pensee'] == "G") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="G" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="G">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serpentard</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>';
                                                if ($TableauDeProfil_Key['Pensee'] == "S") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="S" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="S">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serdaigle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>';
                                                if ($TableauDeProfil_Key['Pensee'] == "SD") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="SD" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="SD">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Poufsouffle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>';
                                                if ($TableauDeProfil_Key['Pensee'] == "P") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="P" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxePensee" value="P">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                          </center>
                                        </div>
                                        <div class="row">
                                          <center>
                                            <div class="col-xs-12">
                                              <h1>Axe de volonté : 🏆</h1>
                                            </div>
                                            <br>
                                            <div style="margin-top:50px;"></div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Gryffondor</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>';
                                                if ($TableauDeProfil_Key['Volonte'] == "G") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="G" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="G">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serpentard</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>';
                                                if ($TableauDeProfil_Key['Volonte'] == "S") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="S" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="S">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Serdaigle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>';
                                                if ($TableauDeProfil_Key['Volonte'] == "SD") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="SD" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="SD">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <label>
                                                <p style="font-size: 20px;">Poufsouffle</p>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>';
                                                if ($TableauDeProfil_Key['Volonte'] == "P") {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="P" checked>';
                                                }else {
                                                  $Tableau = $Tableau .  '<input type="radio" name="AxeVolonte" value="P">';
                                                }
                      $Tableau = $Tableau .  '</label>
                                            </div>
                                          </center>
                                        </div>
                                    </center>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="row">
                                      <div class="col-xs-6">
                                        <input type="submit" name="submit" class="btn btn-warning" value="Modifier 🔄" style="width:100%;">
                                      </div>
                                      <div class="col-xs-6">
                                        <input type="submit" name="submit" class="btn btn-success" value="Non" data-dismiss="modal" style="width:100%;">

                                      </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteProfil'.$TableauDeProfil_Key['Id'].'">Supprimer</button>
                            <div class="modal fade" id="DeleteProfil'.$TableauDeProfil_Key['Id'].'" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Êtes vous sur de vouloir supprimer le profil "'.$TableauDeProfil_Key['Nom'].' ?"</h4>
                                  </div>
                                  <div class="modal-body">
                                    <center>
                                      <form action="" method="post">
                                        <input type="hidden" name="IdToDelete" value="'.$TableauDeProfil_Key['Id'].'">
                                        <input type="submit" name="submit" class="btn btn-danger" value="Supprimer 💀" style="width:50%;">
                                      </form>
                                      <input type="submit" name="submit" class="btn btn-success" value="Non" style="width:50%;" data-dismiss="modal">
                                    </center>
                                    <p></p>
                                  </div>
                                </div>

                              </div>
                            </div></td>
                          </tr>';


  }


  $Tableau = $Tableau . '</tbody>
                    </table>
                  </div>
                </div>
                <br>';

              echo $Tableau;

?>
