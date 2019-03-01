<?php                           // A
function inclusionAutomatique($nomDeLaClasse)
{
    // require_once(A.class.php');           
    require_once($nomDeLaClasse . '.class.php');
    echo "on passe dans inclusionAutomatique<hr>";
    echo "require($nomDeLaClasse.class.php)<hr>";
}

spl_autoload_register('inclusionAutomatique');
/*
    spl_autoload_register() est une fonction prédéfinie qui permet d'executer une fonction lorsque l'interpreteur voit passer un 'new' dans le code
    Le nom a côté du 'new' est récupéré et transmis automatiquement à la fonction inclusionAutomatique() un peu à la manière des méthodes magiques __set, __call ...
    Il est indispensable de respecter une convention de nommage sur ses fichiers pour que l'autoload fonctionne

    Habituellement, nous faisions appel à nos fichiers avec des 'require' mais imaginons que nous avons 50 classes dans 50 fichiers, l'autoload permet d'éviter de faire 50 'require' 
*/

//$a = new A;