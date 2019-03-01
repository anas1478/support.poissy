<?php
class Autoload
{                               // \model\EntityRepository
    public static function className($className)
    {                                               // Controller/Controlle
        require __DIR__ . '/' . str_replace('\\', '/', $className . '.php'); // str_replace permet de remplacer les antislash '\' par des slash '/', nous avons mis deux antislash sinon l'interpreteur considère que c'est un caractère d'echappement
        //echo "require " . __DIR__ . '/' . str_replace('\\', '/', $className . '.php') . '<br>';
    }
}

spl_autoload_register(array('Autoload', 'className'));








