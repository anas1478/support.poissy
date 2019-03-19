<?php

require_once '../functions.php';

extract($_POST); // $_POST['pseudo'] <==> $pseudo
if(!empty($pseudo)){
    redirection('dash.php');
}
if($_POST && !connexion($pseudo, $mdp)) {
    
    // session_destroy();
    
    echo "
    
    <script>
    

    var cardHeader = document.querySelector('.card-header');

    cardHeader.innerHTML = '".error('pseudo ou mot de passe incorrect !')."'

    </script>
    
    ";
   
}

elseif($_POST && connexion($pseudo, $mdp)) {
    // msg error
    $_SESSION['pseudo'] = $pseudo;
    redirection("dash.php");
    // redirection en js

}