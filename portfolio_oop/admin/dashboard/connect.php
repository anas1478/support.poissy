<?php
require_once '../functions.php';

extract($_POST); // $_POST['pseudo'] <==> $pseudo

if($_POST && connexion($pseudo, $mdp)) {
    $_SESSION['pseudo'] = $pseudo;
    redirection("dash.php");
} else {
    // msg error
    session_destroy();
    redirection("login.php");
    
}

