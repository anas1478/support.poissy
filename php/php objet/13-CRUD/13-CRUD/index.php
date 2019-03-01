<?php

require_once "autoload.php";

// Etape 1 :
// require 'Controller.php'
// Etape 2 :
// require 'EntityRepository.php'

$controller = new Controller\Controller; // l'autoload voit passer le mot clef new et fait appel au fichier Controller.php et dans un deuxième temps, dans le controller il y a une instance 'new' de EntityRepository, donc l'autoload fait appel au fichier EntityRepository.php

//echo "<pre>"; var_dump($controller); echo "</pre>";

$controller->handlerRequest();