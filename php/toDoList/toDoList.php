<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toDoList</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
$db = new PDO('mysql:host=localhost;dbname=todo','root','');

function q($req){
    global $db;
    $resultat= $db->query($req);
    if(!$resultat){
        die("error à la connection a la base de donnée");
    }
    return $resultat;
}
if(!empty($_GET['ajouter'])){
    q("INSERT INTO note (note) value ('$_GET[note]')");
}else {
echo"error";
}

?>




<body class="container">
<div class="card p-5">
  <div class="card-header d-flex">
  <input type="text" class="form-control col-8" placeholder="ajouter un tache à faire" name="note">
   <div class="col-1"></div>
    <a href="#" class="btn btn-primary col-3" name="ajouter">ajouter</a>
  </div>
</div>
<body class="container">
<div class="card">
  <div class="card-header d-flex m-2">
 <p class="w-75"> mon chat à la grippe </p>
   <div class="col-1"></div>
   <a href="#" class="btn btn-primary col-1 bg-warning">modifier</a>
    <div class="col-1 "></div>
    <a href="#" class="btn btn-primary col-1 bg-danger">X</a>
  </div>
</div>
</body>
</html>