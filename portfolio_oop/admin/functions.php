<?php

require __DIR__ . "/../src/init.php";
//connection pour verifier l'admin
function connexion($pseudo, $mdp) {
    global $db, $xml;
    // echo "SELECT pseudo FROM $xml->table where pseudo=$pseudo and mdp=$mdp";
    $query = $db->query("SELECT pseudo FROM $xml->table where pseudo='$pseudo' and mdp='$mdp'");
    // var_dump($query);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function redirection($url) {
    header("location: $url");
}
function error($msg){
    echo'
    <div class="alert alert-danger text-center" role="alert">
      '.$msg.'
    </div>';
}
function nonConecter(){
    if(!$_SESSION['pseudo']){
        redirection('login.php');
    }
}//handler att les parametres dans l'url
// function handler(){
//     $menu=isset($_GET['menu'])?$_GET['menu']:NULL;
//     if($menu="cv"){
// //montrer cv
//     }
// }
