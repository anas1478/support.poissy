<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<?php

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "");

echo "<pre>"; var_dump($pdo); echo "</pre>";
echo "<pre>"; print_r(get_class_methods($pdo)); echo "</pre>";

echo "<h2>Exemple n°1 SELECT + QUERY + FETCH</h2>";

$resultat = $pdo->query("SELECT * FROM employes");

echo "<pre>"; var_dump($resultat); echo "</pre>";
echo "<pre>"; print_r(get_class_methods($resultat)); echo "</pre>";

echo "<pre>"; print_r($pdo->errorInfo()); echo "</pre>"; // permet d'afficher les erreurs et la requete si il y en a

echo "<h2>Exemple n°2 SELECT + QUERY + FETCH (un seul résultat)</h2>";

$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes = 627");

// Exo : afficher les données de l'employé 388 sur la page web

echo "<div class='col-md-6 offset-md-3 alert alert-success text-center text-primary'>";
$employe = $resultat->fetch(PDO::FETCH_ASSOC);
foreach($employe as $key => $value){
    echo $key . " ~> " . $value . " <br> ";
}
echo "</div>";

echo "<h2>Exemple n°3 SELECT + QUERY + FETCHALL</h2>";

$resultat = $pdo->query("SELECT * FROM employes");
$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);

//echo "<pre>"; print_r($donnees); echo "</pre>";

// Exo : afficher successivement les données de chaque employes

foreach($donnees as $key => $value){
    echo "<div class='col-md-6 offset-md-3 alert alert-info text-center text-danger'>";   
    foreach($value as $keys => $valeur){
        echo $keys . " ~> " . $valeur . " <br> ";
    }
    echo "</div>";
}


echo "<h2>Exemple n°4 SELECT + QUERY + FETCH_ASSOC</h2>";

$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC); // on demande d'indéxer avec le nom des champs quand c'est toujours au stade d'objet

echo "<pre>"; var_dump($resultat); echo "</pre>";

// Exo : afficher l'ensemble des employes sous forme de tableau HTML avec l'en-tête du tableau (nom des champs)
echo "<table class='table table-striped table-warning'><thead><tr>";

for($i = 0; $i < $resultat->columnCount(); $i++){	
	$colonne = $resultat->getColumnMeta($i);
	if($colonne["name"] !== "mdp"){
		echo '<th scope="col">' . $colonne["name"] . '</th>';
	}	
}

foreach($resultat as $employe){ // je n'ai pas besoind ela méthode fetch() pour réaliser cette boucle foreach, nous avons associé la méthode directement avec la requete SQL
    echo "<tr>";
    foreach($employe as $value)
    {
        echo'<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo "</tbody></table>";
// La boucle foreach permet de passer en revue des tableaux de données ARRAY mais aussi des objets, ici dans notre cas, on travail directement avec l'objet

echo "<h2>Exemple n°5 INSERT, UPDATE, DELETE</h2>";

// Exo : insérez vous dans la BDD à l'aide d'une requete INSERT

//$me = $pdo->exec("INSERT INTO employes VALUES (DEFAULT, 'Gregory', 'Lacroix', 'm', 'Formateur', '2019-02-11', 3000)");
//echo "Nombre d'enregistrement affecté par l'INSERT : $me <br>";


echo "<br><h2>Exemple n°6 : Passage d'args Array + prepare()</h2><br>";
echo "<span>Marque du '?'</span>";

$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = ?"); // on va dans un premier temps "preparer" la requete sans sa partie variable, que l'on représentera avec un marqueur sous forme de point d'intérrogation

$resultat->execute(array("Gallet")); // Gallet va remplacer le ? juste au dessus
var_dump($resultat);
echo "<hr>";
$donnees = $resultat->fetch(PDO::FETCH_ASSOC); // on associe une méthode pour le résultat exploitable
echo implode($donnees, " - "); // implode() permet d'extraire un tableau de données ARRAY en une chaine de caractères 

echo "<span>Marqueur du ':' </span><hr>";
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom"); // déclaration d'un marqueur nominatif

$resultat->execute(array('nom'=>'Gallet')); // Gallet va venir se stocker directement dans le marqueur ':nom' de la requete SQL

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo implode($donnees, " - ");

echo "<br><h2>Exemple n°7 : Récupération PDO::FETCH_OBJ + prepare() + execute()</h2><br>";

// Exo : selectionner à l'aide d'une requete préparée (marqueur nominatif) les informations de l'employé 'Thoyer' et afficher les données à l'aide de la méthode PDO::FETCH_OBJ

$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom");
//$resultat->bindValue(':nom', 'Lacroix', PDO::PARAM_STR);
$resultat->execute(array('nom'=>'Lacroix'));
$donnees = $resultat->fetch(PDO::FETCH_OBJ); // PDO::FETCH_OBJ retourne chaque indice comme propriété public de mon objet (stdClass)
echo "Prénom : " . $donnees->prenom . "<hr>";
// La boucle foreach permet de passer en revue l'objet $resultat
foreach($donnees as $key => $value){
    echo $key . " ~> " . $value . " <br> ";
}

echo "<br><h2>Exemple n°8 : transaction + requete et annulation de celle ci</h2><br>";

$pdo->beginTransaction();

$resultat = $pdo->exec("UPDATE employes SET salaire = 3333");

echo "Nombre d'enregistrement affectés pas l'Update : $resultat";

$result = $pdo->query("SELECT * FROM employes", PDO::FETCH_NUM); //PDO::FETCH_NUM permet d'indéxer numériquement

// Afficher la table employes sous forme de tabelau

echo "<table class='table table-striped table-danger'><thead><tr>";

for($i = 0; $i < $result->columnCount(); $i++){	
	$colonne = $result->getColumnMeta($i);
	if($colonne["name"] !== "mdp"){
		echo '<th scope="col">' . $colonne["name"] . '</th>';
	}	
}
foreach($result as $employe){
    echo "<tr>";
    foreach($employe as $value)
    {
        echo'<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo "</tbody></table>";

$pdo->rollBack();
echo "<span>On annule le changement</span>";
// Afficher de nouveau toute la table employes sous forme de tableau HTML

$result = $pdo->query("SELECT * FROM employes", PDO::FETCH_NUM);

echo "<table class='table table-striped table-danger'><thead><tr>";

for($i = 0; $i < $result->columnCount(); $i++){	
	$colonne = $result->getColumnMeta($i);
	if($colonne["name"] !== "mdp"){
		echo '<th scope="col">' . $colonne["name"] . '</th>';
	}	
}
foreach($result as $employe){
    echo "<tr>";
    foreach($employe as $value)
    {
        echo'<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo "</tbody></table>";

// Pour valider la transaction, il faut executer un commit -- $pdo->$commit() --> permet de valider la transaction

echo "<h2> exemple n°9 : FETCH_CLASS</h2>";

class Employes 
{
    public $id_employes;
    public $prenom;
    public $nom;
    public $sexe;
    public $service;
    public $date_embauche;
    public $salaire;
}

$result = $pdo->query("SELECT * FROM employes");
$objet = $result->fetchAll(PDO::FETCH_CLASS, "Employes"); // permet de prendre les resultats de la requete et d'affecter les propriétés de l'objet. Chaque valeur va être ré-associée aux différentes propriétés de la classe (il faut pour cela que l'orthographe des noms des colonnes/champs SQL correspondant aux proprétés de l'objet)

foreach($objet as $employe)
{
    echo $employe->prenom . '<br>';
}