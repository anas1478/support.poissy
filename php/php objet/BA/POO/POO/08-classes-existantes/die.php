<?php
              // $liste, "Mario"
function recherche($tab,$elem)
{             // $liste
    if(!is_array($tab))
        die('Vous devez envoyer un ARRAY'); // si die() s'execute, tout les traitements suivants ne sortent pas

    $position = array_search($elem, $tab); // fonction prédéfinie qui permet de trouver la position d'un élément dans un tableau ARRAY

    return $position;

}

$liste = array('Mario', 'Yoshi', 'Toad', 'Bowser');

echo "Position de l'élément dans le tableau : " . recherche($liste, "Mario") . "<hr>";
echo "Position de l'élément dans le tableau : " . recherche($liste, "Toad") . "<hr>";
echo "Position de l'élément dans le tableau : " . recherche("fdsdgv", "Toad") . "<hr>";
// Une fois qu'on est tombé dans la condition "die" plus rien ne s'affiche après
echo "Bwwaaah"; // ne s'affiche pas à cause du die() qui s'execute et bloque le script, une erreur peut en engendrer une autre 