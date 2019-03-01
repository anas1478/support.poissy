<?php
$perso = array("M" => "Mario", "L" => "Luigi", "T" => "Toad", "B" => "Bowser");

$it1 = new ArrayIterator($perso);
echo '<pre>'; print_r(get_class_methods($it1)); echo '</pre>';
echo '<pre>'; var_dump($it1); echo '</pre>';

$it1->rewind();
while($it1->valid())
{
    echo $it1->key() . ' - ' . $it1->current() . '<br>';
    $it1->next(); 
}

/*
    Iterator est ce qu'on appel un design pattern, qu'on peut définir par un solution pratique à des problèmes fréquent. Un pattern propose donc une structure commune pour résoudre des problèmes similaires,  et ce même si le contexte diffère selon les cas 
    rewind() : permet de se placer au d"but du fichier/array/dossier
    valid() : permet de vérifier s'il y a des informations à parcourir
    key() : affiche l'indice/ la clé
    current() : affichage de la valeur
    next() : passe à l'élément suivant
*/

$it2 = new SimpleXmlIterator('fichier.xml', null, true);
echo '<pre>'; print_r(get_class_methods($it2)); echo '</pre>';
echo '<pre>'; var_dump($it2); echo '</pre>';

$it2->rewind();
while($it2->valid())
{
    echo $it2->key() . ' - ' . $it2->current() . '<br>';
    $it2->next(); 
}

// Les données sont de nature différente mais la structure du code reste la même, nous avons accés aux mêmes fonctions pour passer en revue le fichier XML que celle pour le tableau ARRAY
//------------------------------------------------------------------------
// Exo : faire la même chose avec la classe DirectoryIterator
$it3 = new DirectoryIterator('..');
echo '<pre>'; print_r(get_class_methods($it3)); echo '</pre>';
echo '<pre>'; var_dump($it3); echo '</pre>';

$it3->rewind();
while($it3->valid())
{
    echo $it3->current() . '<br>';
    $it3->next(); 
}


