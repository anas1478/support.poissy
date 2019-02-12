




<?php
require_once "ini.php";
require_once "nav.php";

if(!empty($_SESSION['pseudo'])){
    header("Location: article.php");
}
if($_POST){

$resultat=executeRequete("SELECT * from membre where pseudo ='$_POST[pseudo]' and mdp ='$_POST[mdp]' ");
if($resultat ->rowCount()>=1){
    $_SESSION['pseudo'] = $_POST['pseudo'];
    header("Location: article.php");
}
else{
    echo"error";
}
}
?>

<h1>connection :</h1>
<div class="row bg-secondary">
<div class="col-4"></div>
<form class="col-4 p-5" method="POST" action="connection.php">

  <div class="form-group">
    <label for="exampleInputEmail1">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-warning d-block m-auto">se connecter</button>
</form>
</div>
</div>
</body>
</html>



