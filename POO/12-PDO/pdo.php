<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<?php
//$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');

echo '<pre>'; var_dump($pdo); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>';

echo "<h2>exemple n° 1 SELECT + QUERY + FETCH</h2>";

$resultat = $pdo->query("erhergergerg");

echo '<pre>'; var_dump($resultat); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($resultat)); echo '</pre>';

echo '<pre>'; print_r($pdo->errorInfo()); echo '</pre>'; // permet d'afficher les erreurs et la requete si il y en a.

echo "<h2>exemple n° 2 SELECT + QUERY + FETCH (1 seul résultat)</h2>";

$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes = 388");

// Exo : afficher les données de l'employé 388 sur la page web
$employe = $resultat->fetch(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($employe); echo '</pre>';

echo '<div class="col-md-4 offset-md-4 alert alert-success text-center text-dark">';
foreach($employe as $key => $value)
{
    echo "$key - $value<br>";
}
echo '</div>';

echo "<h2>exemple n° 3 SELECT + QUERY + FETCHALL </h2>";

$resultat = $pdo->query("SELECT * FROM employes");
$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($donnees); echo '</pre>';

// Exo : afficher successivement les données de chaque employé
// $table contient un tableau ARRAY par tour de boucle
foreach($donnees as $table)
{
    echo '<div class="col-md-4 offset-md-4 alert alert-info text-center text-dark">';
    foreach($table as $key => $value)
    {
        echo "$key - $value<br>"; 
    }
    echo '</div>';
}

//-------------------------------------------------------------------
echo "<h2>exemple n° 4 SELECT + QUERY + FETCH_ASSOC </h2>";
$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC); // on demande d'indexer avec le nom des champ quand c'est toujours au stade d'objet

echo '<pre>'; var_dump($resultat); echo '</pre>';

// Exo : afficher l'ensemble des employés sous forme de tableau HTML avec l'entête du tableau (nom des champs) 
echo '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $resultat->columnCount(); $i++)
{
    $colonne = $resultat->getColumnMeta($i);
    //echo '<pre>'; print_r($colonne); echo '</pre>';
    echo "<th>$colonne[name]</th>";
}
echo '</tr>';
foreach($resultat as $employe) // ja n'ai pas besoin de la méthode fetch() pour réaliser cette boucle foreach, nous avons associé la méthode directement avec la requete SQL
{
    //echo '<pre>'; print_r($employe); echo '</pre>';
    echo '<tr>';
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';
// La boucle foreach permet de passer en revue des tableaux de données ARRAY mais aussi des objets, ici dans notre cas, on travail directement avec l'objet

echo "<h2>exemple n° 5 : INSERT, UPDATE, DELETE </h2>";
// Exo : insérez vous la base de donnée à l'aide d'une requete INSERT
$resultat = $pdo->exec("INSERT INTO employes VALUES (DEFAULT, 'Grégory', 'LACROIX', 'm', 'présidence', '2019-02-11', 15000)");
echo "Nombre d'enregistrements affecté par l'INSERT : $resultat<br>";

echo "<h2>exemple n° 6 : Passage d'args Array + prepare()  + fetch() </h2>";
echo "<span>Marqueur du '?'</span><hr>";
                                                        // Gallet
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = ?"); // on va dans un premier temps "préparer" la requete sans sa partie variable, que l'on représentera avec un marqueur sous forme de point d'interrogation

$resultat->execute(array("Gallet")); // Gallet vas remplacer le point d'interrogation juste au dessus
var_dump($resultat); 
echo '<hr>';
$donnees = $resultat->fetch(PDO::FETCH_ASSOC); // on associe une méthode pour le résultat exploitable
echo implode($donnees, ' - '); // implode() permet d'extraire un tableau de donnée ARRAY en une chaine de caractère

echo "<hr><span>Marqueur du ':'</span><hr>";
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom"); // déclaration d'un marqueur nominatif

$resultat->execute(array('nom' => 'Gallet')); // Gallet va venir se stocker direcvtement dans le marqueur ':nom' de la requete SQL

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo implode($donnees, ' - ');

echo "<h2>exemple n° 7 : Récupération  PDO::FETCH_OBJ + prepare() + execute()</h2>";
// Exo : selectionner à l'aide d'une requete préparée (marqueur nominatif) les informations de l'employé 'Thoyer' et afficher ses données à l'aide de la méthode PDO::FETCH_OBJ
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom");
$resultat->bindValue(':nom', 'Thoyer', PDO::PARAM_STR);
$resultat->execute();

$donnees = $resultat->fetch(PDO::FETCH_OBJ); // PDO::FETCH_OBJ retourne chque indice comme propriété public de mon objet (stdClass)
echo '<pre>'; print_r($donnees); echo '</pre>';

echo "Prénom : " . $donnees->prenom . "<hr>";
// La boucle foreach permet de passer en revue l'objet $resultat
foreach($donnees as $key => $value)
{
    echo $key . ' - ' . $value . '<br>'; 
}

echo "<h2>exemple n° 8 : transaction + requete et annulation de celle ci</h2>";

$pdo->beginTransaction(); 

$resultat = $pdo->exec("UPDATE employes SET salaire = 1000");

echo "Nombre d'enregistrement affecté par l'UPDATE : $resultat<hr>";

$result = $pdo->query("SELECT * FROM employes", PDO::FETCH_NUM); // PDO::FETCH_NUM permet d'indexer numériquement
echo '<span>Avec le changement</span>';
// Afficher la table employes sous forme de tableau HTML
echo '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $result->columnCount(); $i++)
{
    $colonne = $result->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '</tr>';
foreach($result as $employe) 
{
    //echo '<pre>'; print_r($employe); echo '</pre>';
    echo '<tr>';
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';

//----------------------------------------------------------------------------------
$pdo->rollBack(); // permet d'annuler la transaction et de revenir à l'état initial
echo '<span>On annule le changement</span>';
// Afficher de nouveau toute la table employes sous forme de tableau HTML
$result = $pdo->query("SELECT * FROM employes", PDO::FETCH_NUM); // PDO::FETCH_NUM permet d'indexer numériquement
// Afficher la table employes sous forme de tableau HTML
echo '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $result->columnCount(); $i++)
{
    $colonne = $result->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '</tr>';
foreach($result as $employe) 
{
    //echo '<pre>'; print_r($employe); echo '</pre>';
    echo '<tr>';
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';

// Pour valider la transaction, il faut executer un commit -- $pdo->commit() --> permet de valider la transaction

echo "<h2>exemple n° 9 : FETCH_CLASS</h2>";

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
$objet = $result->fetchAll(PDO::FETCH_CLASS, "Employes"); // permet de prendre les résultats de la requete et d'affecter les propriétés de l'objet. Chaque valeur va être ré-associé aux différentes propriétés de la classe (il faut pour cela que l'orthographe des noms des colonnes/champs SQL correspondent aux propriétés de l'objet)

foreach($objet as $employe)
{
    echo $employe->prenom . '<br>';
}

//-----------------------------------------------------------
// FETCH_NUM : index numériquement les données
// FETCH_ASSOC : index avec le nom des champs
// FETCH_BOTH : index à la fois numériquement mais aussi avec le nom des champs
// FETCH_OBJ : retourne les indices comme propriété public de l'objet, retourne un objet issu de la class StdClass()
$result = $pdo->query("SELECT * FROM employes WHERE id_employes = 388", PDO::FETCH_OBJ); // ici on associe une constante directement au stade d'objet 

foreach($result as $tab)
{
    foreach($tab as $key => $value)
    {
        echo "$key - $value<br>";
    }
}






























































