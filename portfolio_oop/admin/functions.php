<?php

require __DIR__ . "/../src/init.php";

function connexion($pseudo, $mdp) {
    global $db, $xml;
    // echo "SELECT pseudo FROM $xml->table where pseudo=$pseudo and mdp=$mdp";
    $query = $db->query("SELECT pseudo FROM $xml->table where pseudo='$pseudo' and mdp='$mdp'");
    var_dump($query);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function redirection($url) {
    header("location: $url");
}
// function error(){
//     echo'</div>
//     <div class="alert alert-danger" role="alert">
//       A simple danger alert—check it out!
//     </div>';
// }