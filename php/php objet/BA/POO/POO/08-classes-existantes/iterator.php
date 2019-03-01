<?php

$perso = array("M" => "Mario", "L" => "Luigi", "T" => "Toad", "B" => "Bowser");

$it1 = new ArrayIterator($perso);
echo "<pre>"; print_r(get_class_methods($it1)); echo "</pre>";
echo "<pre>"; var_dump($it1); echo "</pre>";

$it1->rewind();
while($it1->valid())
{
    echo $it1->key() . ' - ' . $it1->current() . '<br>';
    $it1->next();
}

/*

Iterator est ce qu'on appelle un design pattern qu'on peut definir par une solution pratique à des problemes fréquents. Un pattern propose donc une structure commune pour résoudre des problèmes similaires, et ce même si le contexte diffère selon les cas
rewind() : permet de se placer au début du fichier/array/dossier
valid() : permet de vérifier si il y a des informations à parcourir
key() : affiche l'indice/ la clé
current() : affichage de la valeur
next() : passe à l'élément suivant

*/


$it2 = new SimpleXmlIterator('fichier.xml', null, true);
echo "<pre>"; print_r(get_class_methods($it2)); echo "</pre>";
echo "<pre>"; var_dump($it2); echo "</pre>";

$it2->rewind();
while($it2->valid())
{
    echo $it2->key() . ' - ' . $it2->current() . '<br>';
    $it2->next();
}

// les donnees sont d une nature differente mais la structure du code reste la même, nous avons acces aux mêmes fonctions pour passer en revue le fichier XML que celles pour le tableau ARRAY

//-------------------------------------------------------------------------
//Exo : faire la mm chose avc la classe DirectoryIterator
$it3 = new DirectoryIterator('..');
echo "<pre>"; print_r(get_class_methods($it3)); echo "</pre>";
echo "<pre>"; var_dump($it3); echo "</pre>";

$it3->rewind();
while($it3->valid())
{
    echo $it3->current() . '<br>';
    $it3->next();
}
