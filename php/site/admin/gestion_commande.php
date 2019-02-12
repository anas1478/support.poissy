<?php 
require_once "../inc/haut.inc.php";
require_once "../inc/init.inc.php";

echo '

<table class="table">
  <thead>
    <tr>
      <th scope="col">id commande</th>
      <th scope="col"><a href="?trier">montant</a></th>
      <th scope="col"><a href="?date">date</a></th>
      <th scope="col">Etat</th>
      <th scope="col">Modifier l\'etat</th>
    </tr>
  </thead>
';	 
// requete
$conditions="SELECT * FROM commande ";

if(isset($_GET['trier'])||isset($_GET['date'])) {
    $conditions .=" order by ";
    
    if(isset($_GET['trier'])){
        $conditions .=" montant ";
    }
    if(isset($_GET['date'])){
        $conditions .=" date_enregistrement ";
    } 

    $conditions .=" desc ";
}

 
// $commande_details = executeRequete("SELECT * FROM details_commande");
    $commande = executeRequete($conditions);

    echo "<tbody>";
while ($i = $commande->fetch()) {
    echo '
    
    <tr>
      <td scope="row"> '. $i['id_commande'] .' </td>
      <td scope="row"> '. $i['montant'] .' </td>
      <td scope="row"> '. $i['date_enregistrement'] .' </td>
      <td scope="row"> '. $i['etat'] .' </td>      

      <td scope="row"> 
      
 
      <form method="GET" action="gestion_commande.php">
          <input type="hidden" name="idcmd" value="'. $i['id_commande'] .'">
      <div class="form-check">
      <input class="form-check-input" type="radio" name="changer" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        en cours de traitement
      </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="changer" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        envoyé
      </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="changer" id="exampleRadios2" value="option3">
      <label class="form-check-label" for="exampleRadios2">
        Livré
      </label>
      </div>
      <button type="submit" class="btn btn-success">changer</button>     
      </form>    
      </td>
      </tr>

';
    
}

if(isset($_GET['idcmd']) && isset($_GET['changer'])){
      
  if($_GET['changer'] == "option1") {
    executeRequete("UPDATE commande set etat = 'En cours de traitement' where id_commande = '$_GET[idcmd]'");
    echo'<script>
    alert("les modifications ont etais effectuer");
    window.location.href="gestion_commande.php";
    </script>';
    
  }
  if($_GET['changer'] == "option2") {
    executeRequete("UPDATE commande set etat = 'Envoyé' where id_commande = '$_GET[idcmd]'");
    echo'<script>
    alert("les modifications ont etais effectuer");
    window.location.href="gestion_commande.php";
    </script>';
  }
  if($_GET['changer'] == "option3") {
    executeRequete("UPDATE commande set etat = 'Livré' where id_commande = '$_GET[idcmd]'");
    echo'<script>
    alert("les modifications ont etais effectuer");
    window.location.href="gestion_commande.php";
    </script>';
  }
       
}


require_once "../inc/bas.inc.php";
?>