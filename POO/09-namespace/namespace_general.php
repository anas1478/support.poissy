<?php
namespace General; 

require_once("namespace_commerce.php");
USE Commerce1, Commerce2, Commerce3; // permet de dire quel namepsapce je souhaite importer du fichier namespace_commerce.php

echo __NAMESPACE__ . '<hr>'; // constante magique qui affiche quand quel namespace on se trouve

$std = new \StdClass(); // ça recherche la classe StdClass() dans le namepsace General, si je met l'antislash \, je repars dans l'espace globale d'origine de PHP. ça me permet de sortir du namespace le temps de la ligne
var_dump($std);
echo '<hr>';
$commande = new Commerce1\Commande;
// $commande = new nom_du_namespace\nom_de_la_classe
var_dump($commande);
echo "<hr>Nombre de commande : " . $commande->nbCommande . '<hr>';

// Exo : créer un objet de toute les classes déclarées et faire les affichages des propriétés 
$produit = new Commerce2\Produit;
var_dump($produit);
echo "<hr>Nombre de produit : " . $produit->nbProduit . '<hr>';

$panier = new Commerce3\Panier;
var_dump($panier);
echo "<hr>Nombre de produit dans le panier : " . $panier->nbProduit . '<hr>';

$produit2 = new Commerce3\Produit;
var_dump($produit2);
echo "<hr>Nombre de produit dans le panier : " . $produit2->nbProduit . '<hr>';