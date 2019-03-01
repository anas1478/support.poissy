<?php

class Autoload
{                                   //Controller\Controller
    public static function className($className)
    {                                               //Controller\Controller
        require __DIR__ . '/' . str_replace('\\','/',$className . '.php');//str_replace  permet de remplacer les antislash par des slash, nous avons mis deux antislash sinon l'interpreteur considère que c'est un caractère d'echappement.
        // echo __DIR__ . '/' . str_replace('\\','/',$className . '.php');
    }
}

spl_autoload_register(array('Autoload', 'className')); //spl_autoload_register() quand l'interpreteur voit passer le mot clé 'new', il va dans la class 'Autoload' et execute la fonction 'className', il prend ce qui se trouve a coté de new 'Controller\Controller' et il l'envoi en argument de la fonction.
// echo __DIR__ . '<br>';

// $a = new Controller\Controller;
// $a = new Model\EntityRepository;