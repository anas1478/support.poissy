
<?php
require_once "ini.php";
require_once "nav.php";

$user='';
if(isset($_SESSION['pseudo'])) 
  $user= $_SESSION['pseudo'];

if(isset($_POST['pseudo']) && isset($_POST['commentaire'])){
executeRequete("INSERT INTO commentaire (pseudo, commentaire) VALUES ('$_POST[pseudo]','$_POST[commentaire]')");
}
?>
<div class="card mb-3">
  <img src="http://www.leparisien.fr/images/2018/10/07/b508d414-ca31-11e8-ae6c-28cc84505cb7_1.jpg"  class="card-img-top rounded mx-auto d-block" alt="img le parisier">
  <div class="card-body">
    <h5 class="card-title">Pour Anas, 25 ans, c’est « l’opportunité d’être formé dans un secteur d’avenir »

</h5>
    <p class="card-text">Anas, jeune de 25 ans de Meulan, qui fait partie de la première promotion de l’école du Web, a trouvé sa voie. « Je suis une formation qui me convient, c’est ce que je veux faire, se félicite-t-il. On travaille sur quelque chose de concret et en plus je perçois un salaire ».

Lorsqu’il a cessé ses études, voici deux ans, il était perdu. « Après avoir obtenu un bac technologique, je ne savais pas quelle orientation prendre, ce qui m’était proposé ne correspondait pas à mes souhaits, explique-t-il. Je suis donc sorti du système scolaire et j’ai fait des petits boulots dans le domaine du commerce. Je suis aussi devenu bénévole à la Croix-Rouge. Désormais, j’ai l’opportunité d’être formé dans un secteur d’avenir : c’est une seconde chance pour moi. »</p>
    <p class="card-text"><small class="text-muted">source: <a href="http://www.leparisien.fr/yvelines-78/poissy-une-ecole-du-web-au-coeur-de-la-cite-07-10-2018-7913151.php" target="_blank">le parisien</a></small></p>
  </div>
</div>

<!--les commentaire-->

<?php
$com=executeRequete("SELECT * from commentaire order by id desc limit 5");


while($a=$com->fetch(PDO::FETCH_ASSOC)){

  
 echo'
  <div class="card">
  <div class="card-header">de : 
  '.$a['pseudo'].'
  </div>
  <div class="card-body">
    <p class="card-text">'.$a['commentaire'].'</p>
  </div>
</div>
';

}

?>







<!---fin des commentaire 
-->
<form method="POST" action="article.php"> 

  <div class="form-group">
    <label for="exampleFormControlInput1">Pseudo :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="votre pseudo" name="pseudo" value="<?=$user ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">votre commentaire :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" value='envoyer'>
</form>

