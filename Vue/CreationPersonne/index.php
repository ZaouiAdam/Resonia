<style media="screen">
  input[type=radio] {
    border: 0px;
    width: 100%;
    height: 2em;
  }
</style>

<?php

if ($Error == "1") {
  echo '<center><h1>Création de profil</h1><h3 style="color:#a51b0b;">🚨 Attention : Deux attributs ou plus ne peuvent pas avoir la même maison !</h3></center><hr>';
}else {
  echo '<center><h1>Création de profil</h1></center><hr>';
}

$Nom = '<div class="row">
  <div class="col-xs-12">
    <h1>Nom :</h1>
  </div>
  <br>
  <div class="col-xs-8">
    <div class="form-group">
      <input type="text" class="form-control" name="Nom" placeholder="Exemple : Tom Jedusor..." required>
    </div>
  </div>
  <div class="col-xs-4">
    <input type="submit" name="submit" class="btn btn-primary" value="Valider" style="width:100%;">
  </div>
</div>
<hr>';

$Vie = '<div class="row">
          <center>
            <div class="col-xs-12">
              <h1>Force de vie : 🧬</h1>
            </div>
            <br>
            <div style="margin-top:50px;"></div>
            <div class="col-xs-3">
              <label>
                <p style="font-size: 20px;">Gryffondor</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>
                <input type="radio" name="ForceVie" value="G" checked>
              </label>
            </div>
            <div class="col-xs-3">
              <label>
                <p style="font-size: 20px;">Serpentard</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>
                <input type="radio" name="ForceVie" value="S">
              </label>
            </div>
            <div class="col-xs-3">
              <label>
                <p style="font-size: 20px;">Serdaigle</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>
                <input type="radio" name="ForceVie" value="SD">
              </label>
            </div>
            <div class="col-xs-3">
              <label>
                <p style="font-size: 20px;">Poufsouffle</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>
                <input type="radio" name="ForceVie" value="P">
              </label>
            </div>
          </center>
        </div>
        <hr>';

$Action = '<div class="row">
            <center>
              <div class="col-xs-12">
                <h1>Axe daction : 🏃‍♂️</h1>
              </div>
              <br>
              <div style="margin-top:50px;"></div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Gryffondor</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>
                  <input type="radio" name="AxeAction" value="G" checked>
                </label>
              </div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Serpentard</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>
                  <input type="radio" name="AxeAction" value="S">
                </label>
              </div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Serdaigle</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>
                  <input type="radio" name="AxeAction" value="SD">
                </label>
              </div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Poufsouffle</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>
                  <input type="radio" name="AxeAction" value="P">
                </label>
              </div>
            </center>
          </div>
          <hr>';

$Pensee = '<div class="row">
            <center>
              <div class="col-xs-12">
                <h1>Axe de pensée : 🧠</h1>
              </div>
              <br>
              <div style="margin-top:50px;"></div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Gryffondor</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>
                  <input type="radio" name="AxePensee" value="G" checked>
                </label>
              </div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Serpentard</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>
                  <input type="radio" name="AxePensee" value="S">
                </label>
              </div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Serdaigle</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>
                  <input type="radio" name="AxePensee" value="SD">
                </label>
              </div>
              <div class="col-xs-3">
                <label>
                  <p style="font-size: 20px;">Poufsouffle</p>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>
                  <input type="radio" name="AxePensee" value="P">
                </label>
              </div>
            </center>
          </div>
          <hr>';

$Volonte = '<div class="row">
              <center>
                <div class="col-xs-12">
                  <h1>Axe de volonté : 🏆</h1>
                </div>
                <br>
                <div style="margin-top:50px;"></div>
                <div class="col-xs-3">
                  <label>
                    <p style="font-size: 20px;">Gryffondor</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Blason_Gryffondor.svg/120px-Blason_Gryffondor.svg.png" alt="Gryffondor"><br>
                    <input type="radio" name="AxeVolonte" value="G" checked>
                  </label>
                </div>
                <div class="col-xs-3">
                  <label>
                    <p style="font-size: 20px;">Serpentard</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Blason_Serpentard.svg/120px-Blason_Serpentard.svg.png" alt="Serpentard"><br>
                    <input type="radio" name="AxeVolonte" value="S">
                  </label>
                </div>
                <div class="col-xs-3">
                  <label>
                    <p style="font-size: 20px;">Serdaigle</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Blason_Serdaigle.svg/120px-Blason_Serdaigle.svg.png" alt="Serdaigle"><br>
                    <input type="radio" name="AxeVolonte" value="SD">
                  </label>
                </div>
                <div class="col-xs-3">
                  <label>
                    <p style="font-size: 20px;">Poufsouffle</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Coat_of_arms_Hufflepuff.svg/120px-Coat_of_arms_Hufflepuff.svg.png" alt="Poufsouffle"><br>
                    <input type="radio" name="AxeVolonte" value="P">
                  </label>
                </div>
              </center>
            </div>
            <hr>';


echo '<form action="" method="post">' . $Nom . $Vie . $Action . $Pensee . $Volonte . '</form>';


?>
