<?php

function inclusionAutomatique($nomDeLaClasse)
{
    require_once($nomDeLaClasse . '.class.php');
    echo "on passe dans inclusionAutomatique<hr>";
    echo "require($nomDeLaClasse.class.php)";
}

spl_autoload_register("inclusionAutomatique");

// $a = new A;

//spl_autoload_register() est une fonction prédéfinie qui permet d'executer une fonction lorsque l'interpreteur voit passer un 'new' dans le code.  Le nom a coté du "new" est récupéré et transmis automatiquement à la fonction inclusionAutomatique un peu a la maniere des méthodes magiques __set, __call ... Il est indispensable de respecter une convention de nommage sur ses fichiers pour que l'autoload fonctionne.

//Habituellement, nous faisons appel à nos fichiers ave des 'require' mais imaginons que nous avons 50 classes dans 50 fichiers, l'autoload permet d'éviter de faire 50 'required'.