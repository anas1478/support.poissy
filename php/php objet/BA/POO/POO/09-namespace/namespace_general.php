<?php

namespace General;

require_once("namespace_commerce.php");
USE Commerce1, Commerce2, Commerce3; // Permet de dire quel namespace je souhaite importer du fichier namespace_commerce.php 

echo __NAMESPACE__ . '<hr>'; // constante magique qui affiche dans quel namespace on se trouve

$std = new \StdClass(); //ça recharge la classe StdClass() dans le namespace General, si je met l'antislah, je repars dans l'espace globale d'origine de PHP. ça me permet de sortir du namespace le temps de la ligne 
var_dump($std);
echo "<br>";

$commande = new Commerce1\Commande;
//$commande = new nom_du_namespace\nom_de_la_classe
var_dump($commande);
echo "<hr>";

//Exo : créer un objet de toutes les classes déclarées et faire les affichages de propriétés

$produit1 = new Commerce2\Produit;
var_dump($produit1);
echo "Il y a <strong> " . $produit1->nbProduit . " </strong> produits dans le Commerce 1 <hr>";

$produit2 = new Commerce3\Panier;
var_dump($produit2);
echo "Il y a <strong> " . $produit2->nbProduit . " </strong> produits dans mon panier <hr>";

$produit3 = new Commerce3\Produit;
var_dump($produit3);
echo "Il y a <strong> " . $produit3->nbProduit . " </strong> produits dans le Commerce 3 <hr>";