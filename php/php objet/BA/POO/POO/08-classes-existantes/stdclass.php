<?php

// echo "<pre>"; print_r(get_declared_classes()); echo "</pre>"; // Permet d'observer toutes les classes préfédinies existantes en PHP

// Exemple : StdClass()
$tab = array('Mario', 'Yoshi', 'Toad', 'Bowser');
$objet = (object) $tab; // CAST : transformation
echo "<pre>"; var_dump($objet); echo "</pre>";
// Un objet fait parti de la classe STDCLASS (classe standart de php) lorque celui ci est orphelin et n'a pas été instancié par un 'new', l'objet n'est issu d'aucune classe en particulier

echo $objet->{2}; // Permet d'afficher un élément de l'objet