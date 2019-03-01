<?php 
class Homme 
{
    private $error;
    private $prenom;
    private $nom;          // Grégory
    public function setPrenom($prenom)
    {              // Grégory
        if(is_string($prenom))
        {
            $this->prenom = $prenom;
        }
        else
        {
            $this->error = trigger_error("ce n'est pas un string", E_USER_WARNING);
            return $this->error;
        }
    }
    public function getPrenom()
    {       
        return $this->prenom; // Grégory
    }
    public function setNom($nom)
    {
        if(is_string($nom))
            $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
}
//-------------------------------------------------------
$homme = new Homme;
$homme->setPrenom("Grégory");
echo $homme->getPrenom() . '<hr>';

$homme->setNom('LACROIX');
echo $homme->getNom() . '<hr>';

//-------------------------------------------------------
$homme2 = new Homme;
echo $homme2->getPrenom() . '<hr>'; // cette ligne ne donne aucun prenom car j'ai réinstancié l'objet dans la variable $homme2. preuve qu'au dessus on modifiasi bien l'objet et non la classe 

$homme->setNom('LACROIX');
echo $homme2->getNom() . '<hr>';

// $this représente l'objet à l'intérieur de la classe



