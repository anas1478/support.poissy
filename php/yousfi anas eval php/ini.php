<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
    h1{
        text-align:center;
    }
    .row{
        margin-top: 30px;
    }
    </style>
</head>
<body class="container bg-light">
<?php
$db = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '');
 function executeRequete($req){
     global $db;
     $resultat=$db->query($req);
     return $resultat;
 
if($resultat){
        return true;

    } else{
        return false;
    }
    
}
?>