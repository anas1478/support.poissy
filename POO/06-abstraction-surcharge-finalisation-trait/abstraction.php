<?php
abstract class Joueur
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }
    abstract public function EtreMajeur();
    abstract public function Devise();
}
//----------------------------------------------------
class JoueurFr extends Joueur
{
    public function EtreMajeur()
    {
        return 18;
    }
    public function Devise()
    {
        return '€';
    }
}
//------------------------------------------------------
class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
        return 21;
    }
    public function Devise()
    {
        return '$';
    }
}
//------------------------------------------------------
// $joueur = new Joueur; /!\ errreur !! il n'est pas possible d'instancier une classe abstraite
// Pour déclarer des méthodes 'abstraite' il faut que la class soit 'abstraite'
$joueurFr = new JoueurFr;
echo '<pre>'; var_dump($joueurFr); echo '</pre>';
echo "Le joueur doit avoir <strong>" . $joueurFr->seConnecter() . "</strong> ans pour accéder au jeu en ligne<hr>"; 
echo "Le joueur doit avoir <strong>" . $joueurFr->EtreMajeur() . "</strong> ans pour accéder au jeu en ligne<hr>"; 
echo "La devise est : <strong>" . $joueurFr->Devise() . "</strong><hr>"; 

//-------------------------------------------------------
$joueurUs = new JoueurUs;
echo '<pre>'; var_dump($joueurUs); echo '</pre>';
echo "Le joueur doit avoir <strong>" . $joueurUs->seConnecter() . "</strong> ans pour accéder au jeu en ligne<hr>"; 
echo "Le joueur doit avoir <strong>" . $joueurUs->EtreMajeur() . "</strong> ans pour accéder au jeu en ligne<hr>"; 
echo "La devise est : <strong>" . $joueurUs->Devise() . "</strong><hr>"; 

/*
    - Une classe abstraite n'est pas instanciable
    - les méthodes abstraites n'ont pas de contenu
    - Lorsque l'on hérite de méthodes abstraites, nous sommes obligé de les redéfinir
    - pour définir des méthodes abstraites, il est nécessaire que la classe sui les contient soit abstraite

    Le développeur qui écrit la classe 'Joueur' est au coeur de l'application (noyau) et va obliger les autres développeur à redéfinir la méthode EtreMajeur() et Devise(). C'est une bonne méthodes de travail. on impose de bonne contraintes.
*/




