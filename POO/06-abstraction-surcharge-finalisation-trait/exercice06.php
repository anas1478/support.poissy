<?php 
abstract class Vehicule
{
    final public function demarrer()
    {
        return "je démarre";
    }
    abstract public function carburant();
    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}
//---------------------------------------
// $vehicule = new Vehicule; Réponse 1
class Peugeot extends Vehicule
{
    public function carburant()
    {
        return 'Essence';
    }
    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 70;
    }
}
//----------------------------------------
class Renault extends Vehicule
{
    public function carburant()
    {
        return 'Diesel';
    }
    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 30;
    }
}

$peugeot = new Peugeot;
echo "Peugeot > " . $peugeot->demarrer() . '<br>';
echo "Peugeot > " . $peugeot->carburant() . '<br>';
echo "Peugeot > " . $peugeot->nombreDeTestObligatoire() . '<hr>';

$renault = new Renault;
echo "Renault > " . $renault->demarrer() . '<br>';
echo "Renault > " . $renault->carburant() . '<br>';
echo "Renault > " . $renault->nombreDeTestObligatoire() . '<hr>';

/*
    1. Faire en sorte de ne pas avoir d'objet Vehicule
    2. Obligation pour la Renault et la Peugeot de posséder la même méthode démarrer() qu'un véhicule de base.
    3. Obligation pour la Renault de déclarer un craburant diesel et pour la Peugeot de déclarer un carburant essence
    4. La Renault doit effectuer 30 tests de plus qu'un véhicule de base
    5. La Peugeot doit effectuer 70 tests de plus qu'un véhicule de base
    6. Effectuer les affichages nécessaires
*/