<?php 
/*
    UML 

----------------------
| Vehicule           |    1. Création d'un véhicule 1
----------------------    2. Attribuer un nombre de litres d'essence au véhicule 1 : 5
| $litresEssence     |    3. Afficher le nombre de litres d'essence du véhicule 1
----------------------    4. Création d'une pompe
| setLitresEssence() |    5. Attribuer un nombre de litres d'essence à la pome : 800
| getLitresEssence() |    6. Afficher le nombre de litres d'essence de la pompe
----------------------    7. la pompe donn de l'essence en faisant le plien (50L)
                             à la voiture 1
----------------------    8. Afficher le nombre de litres d'essence de la voiture aprés
| Pompe              |       ravitaillement
----------------------    9. Afficher le nombre de litres restant à la pompe
| $litresEssence     |      
----------------------    public function donnerEssence(Vehicule $v)   
| setLitresEssence() |
| getLitresEssence() |
| donnerEssence()    |
----------------------
*/

class Vehicule
{
    private $litresEssence;
    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
}
//-----------------------------------------------------------
class Pompe
{
    private $litresEssence;
    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
    public function donnerEssence(Vehicule $v) // $v représente un objet de type 'Vehicule', du coup nous avons accés au méthodes de la class 'Vehicule' dans la class 'Pompe'
    {
        $this->setLitresEssence($this->getLitresEssence() - (50 - $v->getLitresEssence())); //                        800                   - 50 - 5

        $v->setLitresEssence($v->getLitresEssence() + (50 - $v->getLitresEssence()));
        //                           5              +  50 - 5
    }
}
//---------------------------------------------------------
$vehicule1 = new Vehicule;
$vehicule1->setLitresEssence(5);
echo "La voiture possède <strong>" . $vehicule1->getLitresEssence() . "</strong> litres d'essence<hr>"; 
//---------------------------------------------------------
$pompe = new Pompe;
$pompe->setLitresEssence(800);
echo "La pompe possède <strong>" . $pompe->getLitresEssence() . "</strong> litres d'essence<hr>"; 
//---------------------------------------------------------
$pompe->donnerEssence($vehicule1);
//--------------------------------------------------------
echo "Après ravitaillement, le vehicule 1 possède <strong> " . $vehicule1->getLitresEssence() . "</strong> litres d'essence<br>";
//---------------------------------------------------------
echo "Après ravitaillement, la pompe possède <strong> " . $pompe->getLitresEssence() . "</strong> litres d'essence<br>";