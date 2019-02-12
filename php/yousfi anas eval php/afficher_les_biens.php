<?php 
require_once 'ini.php';

echo '
<a href="Enregistrement_donnees.php" class="btn btn-info float-right p-3 m-3">enregistrer un bien</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id logement</th>
      <th scope="col">Titre</a></th>
      <th scope="col">Ville</a></th>
      <th scope="col">Code Postal</th>
      <th scope="col">Surface en m2</th>
      <th scope="col">Prix en €</th>
      <th scope="col">Photo</th>
      <th scope="col">Type</th>
      <th scope="col">description</th>
     
    </tr>
  </thead>
';	 
// requete
    $aficher = executeRequete("SELECT * from logement ");

    echo "<tbody>";
while ($i = $aficher->fetch()) {
    echo '
  
    <tr>
      <td scope="row"> '. $i['id_logement'] .' </td>
      <td scope="row"> '. $i['titre'] .' </td>
      <td scope="row"> '. $i['ville'] .' </td>
      <td scope="row"> '. $i['cp'] .' </td>      
      <td scope="row"> '. $i['surface'] .'m2 </td>      
      <td scope="row"> '. $i['prix'] .'€ </td>      
      <td scope="row"><img src="img/'. $i['photo'] .'" width="300"> </td>      
      <td scope="row"> '. $i['type'] .' </td>      
      <td scope="row"> '. $i['description'] .' </td>      

      <td scope="row"> ';

}
echo'
</table>
</body>'
?>
      
 
    


