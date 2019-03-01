<?php
// echo '<pre>'; print_r(get_declared_classes()); echo '</pre>'; permet d'observer toute les classes prédéfinies existante en PHP

// Exemple StdClass()
$tab = array('Mario', 'Yoshi', 'Toad', 'Bowser');
$objet = (object) $tab; // Cast : transformation
echo '<pre>'; var_dump($objet); echo '</pre>'; 
// Un objet fait parti de la classe STDCLASS (classe standart de php) lorsque celui-ci est orphelein et n'a pas été instancié par un 'new', l'objet n'est issu d'aucune classe en particulier

echo $objet->{0}; // permet d'afficher un élément de l'objet

