<?php 
error_reporting(0);
require_once 'ini.php';


if(!empty($_POST) && isset($_POST)){
  executeRequete("INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description)
  VALUES ('$_POST[titre]','$_POST[Adresse]','$_POST[Ville]','$_POST[cp]','$_POST[Surface]','$_POST[Prix]','$_POST[img]','$_POST[type]','$_POST[Description]')");
  echo'<script>alert("votre annonce a bien été prises en compte !")</script>';
}

?>
<a href="afficher_les_biens.php" class="btn btn-info float-right p-3 m-3">voir les biens</a>
<form method="post" action="">
    <h1><u>enregitrer un bien :</u></h1><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Titre *</label>
      <input type="text" class="form-control" id="inputEmail4" name="titre" placeholder="vote titre" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Adresse *</label>
      <input type="text" class="form-control" id="inputPassword4" name="Adresse" placeholder="16 rue du pond.." required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Ville *</label>
    <input type="text" class="form-control" id="inputAddress" name="Ville" placeholder="paris" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Code Postal *</label>
    <input type="number"   class="form-control"  name="cp" placeholder="75000" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Surface *</label>
      <input type="number"   class="form-control" name="Surface" id="inputCity" required>m2
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Prix *</label>
      <input type="number"   class="form-control" name="Prix" id="inputCity">€
    </div>
    <div>
    <p>C'est pour une ? *  </p>
    <input type="radio" name="type" value="location"> location
<input type="radio" name="type" value="vente"> vente<br>
</div>
<div>
  <label for="file">selectioner une image</label>
  <input class="btn btn-warning" type="file" name="img" accept="image/*">

  <button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description"></textarea>
</div>
</div>

<p>* ces champs sont obligatoire.</p>
</form>
</body>