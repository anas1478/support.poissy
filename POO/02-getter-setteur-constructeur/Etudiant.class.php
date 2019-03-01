<?php
class Etudiant
{
    private $prenom;         // Grégory
    public function __construct($arg)
    {                                                               // Grégory
        echo "Instanciation, nous avons reçu l'information suivante : $arg<br>";
                            // Grégory
        return $this->setPrenom($arg);
        // return $etudiant->setPrenom($arg);
    }
    public function getPrenom()
    {
        // return $etudiant->prenom;
        return $this->prenom;
    }
                            // Grégory
    public function setPrenom($arg)
    {
        // Tous les contrôles sur les données sont ici
        $this->prenom = $arg;
        // $etudiant->prenom = 'Grégory';
    }
}
//--------------------------------------------------------------
$etudiant = new Etudiant('Grégory'); // __ construct est appelé automatiquement - nous mettons un argument aprés le nom de la classe qui attérit directement dans le constructeur
// $bdd = new PDO('identfiants BDD...');
echo '<pre>'; var_dump($etudiant); echo '</pre>';

echo "Prénom : " . $etudiant->getPrenom() . '<hr>';

$etudiant->__construct('Julie'); // le constructeur peut tout de même être appelé comme une méthode "classique"
echo "Prénom : " . $etudiant->getPrenom() . '<hr>';

$etudiant->setPrenom('Yvette');
echo "Prénom : " . $etudiant->getPrenom() . '<hr>';

/*
    Exemple d'insertion : c'est le getteur qui permettrait d'exploiter la donnée finale et de l'insérer dans une BDD
    $bdd->exec(INSERT INTO employes (prenom) VALUE ($etudiant->getPrenom()));

    __construct() est une méthode magique qui s'execute automatiquement, elle sera l'equivalent du init.php avec session_start(), connexion à la BDD, autoload etc...

    setteur : permet de contrôler les données 
    getteur : permet de voir / exploiter les données finales
    private $prenom : la propriété est privé afin que l'on ne puisse pas la remplir à l'extérieur de la classe sans avoir fait des contrôles au préalable, c'est à dire sans être passé par les getteur / setteur 
    dans notre cas, lorsque l'on instancie la classe, les données vont directement au setteur, c'est une sécurité, on sait que les données ne vont pas n'importe où

    Si nous avons un formulaire avec 2 champs, nous aurons autant de getteur et setteur qu'il y a de champs --> 20 setteurs et 20 getteurs
*/










