<?php
final class Application
{
    public function lancementApplication()
    {
        return "L'appli se lance comme cela !!";
    }
}
//-------------------------------------------------------
$app = new Application;
echo '<pre>'; var_dump($app); echo '</pre>';

//class test extends Application {} /!\ erreur !! il n'est pas possible d'hériter d'une classe finale

//-------------------------------------------------------
class Application2
{
    final public function lancementApplication()
    {
        return "L'appli se lance comme cela !!";
    }
}

class Extension extends Application2
{
    // public function lancementApplication() {} /!\ erreur !! je ne peux pas surcharger ou redéfinir une méthode finale
}
//-----------------------------------------------------
$ext = new Extension;
echo $ext->lancementApplication();

/*
    - Une classe finale en peut pas être héritée
    - une classe finale reste instanciable
    - une méthode finale peut être présente dans une classe normale
    - une méthode finale permet d'éviter qu'elle soit redéfinie ou surcharger
    - L'intéret de mettre le mot clé 'final' sur une méthode est de vérouiller afin d'empecher tout sous-classe de la redéfinir (quand nous voulons que le comportement d'une méthode soit préservé durant l'héritage)
*/




