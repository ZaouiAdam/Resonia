<?php

  if ($Succes == "0") {
    echo '<center><h1>Gestion des affinitées</h1></center><hr>';
  }
  if ($Succes == "1") {
     echo '<center><h1>Gestion des affinitées</h1><h3 style="color:#008000;">✅🔄 Succés : L\'affinitée "'.$NomModifier.'" à été modifié avec succés.<h3></center><hr>';
   }


 $Tableau = '<table class="table table-bordered">
               <thead>
                 <tr>
                   <th>Id</th>
                   <th>Codex</th>
                   <th>Nom</th>
                   <th>Description</th>
                   <th>Risque</th>
                   <th>Modifier</th>
                 </tr>
               </thead>
               <tbody>';

               foreach ($Affiniter as $Affiniter_Key) {
                 $Tableau = $Tableau . '<tr><form action="" method="post">
                        <td>'.$Affiniter_Key['Type'].'</td>
                        <td>
                          <div class="form-group">
                            <input type="text" name="Codex" class="form-control" value="'.$Affiniter_Key['Codex'].'">
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <input type="text" name="Nom" class="form-control" value="'.$Affiniter_Key['Nom'].'">
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <textarea name="Description" class="form-control" rows="8" cols="80" placeholder="Description..." maxlength="1999">'.$Affiniter_Key['Description'].'</textarea>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <textarea name="Risque" class="form-control" rows="8" cols="80" placeholder="Risque..." maxlength="1999">'.$Affiniter_Key['Risque'].'</textarea>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <input type="hidden" name="IdManage"  value="'.$Affiniter_Key['Id'].'">
                            <input type="submit" name="submit" class="btn btn-warning" value="🔄" style="width:100%;">
                          </div>
                        </td>
                      </form></tr>';
               }



$Tableau = $Tableau . '</tbody>
             </table>';

  echo $Tableau;

?>
