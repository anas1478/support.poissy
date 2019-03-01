<?php
class Maison
{
    private static $nbPiece = 7;
    public static $espaceTerrain = '500m';
    public $couleur = 'blanc';
    const HAUTEUR = '10m';
    private $nbPorte = 10;
    public static function getNbPiece()
    {
        return self::$nbPiece;

    }
    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}
// 1 - Afficher le nombre de pièce de la maison
echo "Nombre de pièce de la maison : <strong>" . Maison::getNbPiece() . "</strong><br>";
// 2 - Afficher l'espace terrain de la maison
echo "Espace terrain de la maison : <strong>" . Maison::$espaceTerrain . "</strong><br>";
// 3 - afficher la hauteur de la maison
echo "Hauteur de la maison : <strong>" . Maison::HAUTEUR . "</strong><br>"; // ex : fetch(PDO::FETCH_ASSOC) 
// une constante se déclare toujours en majuscule et appartient à la classe
// 4 - Afficher la couleur de la maison
$maison = new Maison;
echo "Couleur de la maison : <strong>" . $maison->couleur . "</strong><br>";
// 5 - Afficher le nombre de porte de la maison
echo "Nombre de porte de la maison : <strong>" . $maison->getNbPorte() . "</strong><hr>";

// echo $maison::$espaceTerrain; // devrait donner une erreur, c'est du n'importe quoi !!!
// echo $maison->espaceTerrain . '<br>'; // /!\ erreur !! je ne dois appeler une propriété static avec mon objet
echo $maison->getNbPiece() . '<br>'; // /!\ devrait donner une erreur !! car la méthode est static, il faudrait l'appeler avec la classe
// echo Maison::$couleur; /!\ erreur !! on ne doit pas appeler une propriété public par la classe
