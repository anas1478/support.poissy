<?php
class Electricien
{
    public function getSpecialiste()
    {
        return "pose de câbles, disjoncteurs, tableaux ou armoires électriques... <hr>";
    }
    public function getHoraires()
    {
        return "10h/18h";
    }
}
//----------------------------------------------------
class Plombier
{
    public function getSpecialiste()
    {
        return "tuyauw, robinets, chauffe-eau, compteurs...<hr>";
    }
    public function getHoraires()
    {
        return "8h/19h";
    }
}
//-------------------------------------------------------
class Entreprise
{               //   1
    public $numero = 0;         // Electricien
    public function appelUnEmploye($employe)
    {
        $this->numero++;
        // $this->monEmploye2 = new Electricien;
        // $entreprise->monEmploye2 = new Electricien;  // Electricien
        $this->{"monEmploye" . $this->numero} = new $employe; // création de varaible dynamique dans laquelle on stock une instance   
        return $this->{"monEmploye" . $this->numero}; // on retourne l'objet crée
        // return $entreprise->monEmploye2;
    }
}
//-------------------------------------------------------
$entreprise = new Entreprise;

$entreprise->appelUnEmploye('Plombier');

echo '<pre>'; var_dump($entreprise); echo '</pre>';

echo $entreprise->monEmploye1->getSpecialiste();
echo $entreprise->monEmploye1->getHoraires();

// Exo : faites la même chose pour avec la class Electricien
$entreprise->appelUnEmploye('Electricien');

echo '<pre>'; var_dump($entreprise); echo '</pre>';

echo $entreprise->monEmploye2->getSpecialiste();
echo $entreprise->monEmploye2->getHoraires();



