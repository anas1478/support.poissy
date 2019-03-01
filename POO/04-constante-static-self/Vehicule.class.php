<?php
class Vehicule
{
    private static $marque = 'BMW';
    private $couleur = 'noir';
    public static function setMarque($marque)
    {
        self::$marque = $marque;
    }
    public static function getMarque()
    {
        return self::$marque;
    }
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
}
//--------------------------------------------------------
$vehicule1 = new Vehicule;
echo "Vehicule1 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule1->getCouleur() . "</strong><br>"; 

$vehicule2 = new Vehicule;
$vehicule2-> setCouleur('rouge');
echo "Vehicule2 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule2->getCouleur() . "</strong><br>"; 

$vehicule3 = new Vehicule;
echo "Vehicule3 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule3->getCouleur() . "</strong><br>"; 

$vehicule4 = new Vehicule;
Vehicule::setMarque('Mercedes');
echo "Vehicule4 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule4->getCouleur() . "</strong><br>"; 

$vehicule5 = new Vehicule;
echo "Vehicule4 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule5->getCouleur() . "</strong><br>"; 

/*
    Un élément déclaré comme 'static' appartient à la classe et non à l'objet
    Si je modifie un élément 'static', je modifie la classe elle même
    $objet-> élément d'un objet à l'extérieur de la classe
    $this-> élément d'un objet à l'intérieur de la classe
    class:: élément de la classe à l'extérieur de la classe
    self:: élément d'une classe à l'intérieur de la classe
*/