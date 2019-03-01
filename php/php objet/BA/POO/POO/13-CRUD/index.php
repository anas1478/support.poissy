<?php
require_once 'autoload.php';

// ETAPE 1 : require 'Controller.php';
// ETAPE 2 : require 'EntityRepository.php'

$controller = new Controller\Controller; // l'autoload voit passer le mot clé 'new' et fait appel au fichier Controller.php. Et dans un 2e temps, dans le controller il y a une instance 'new' de EntityRepository, donc l'autoload fait appel au fichier EntityRepository.php

// echo '<pre>'; var_dump($controller); echo '</pre>';

$controller->handlerRequest();