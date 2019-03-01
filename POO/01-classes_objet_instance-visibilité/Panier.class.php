<?php
class Panier
{
    public $nbProduits;
    public function ajouterArticle()
    {
        return "L'article a été ajouté";
    }
    protected function retirerArticle()
    {
        return "L'article a été retiré";
    }
    private function affichageArticle()
    {
        return "Voici les articles";
    }
    // public function test()
    // {
    //     return $this->retirerArticle();
    // }
}

$panier1 = new Panier;
echo '<pre>'; var_dump($panier1); echo '</pre>'; // on observe un objet issu de la classe 'Panier' à l'identifiant '1' (référence de l'objet) 

echo '<pre>'; var_dump(get_class_methods($panier1)); echo '</pre>'; // get_class_methods() fonction prédéfinie permettant d'observer les méthodes issues d'une classe

$panier1->nbProduits = 5;
echo '<pre>'; print_r($panier1); echo '</pre>';

echo "Nombre de produit dans le panier 1 : " . $panier1->nbProduits . '<br>'; // on pioche une propriété de la classe à travers l'objet, pas de parenthèse, c'est une propriété / propriété public OK
echo "Panier1 > " . $panier1->ajouterArticle() . '<br>'; // on pioche une méthode de la classe à travers l'objet, des parenthèses, c'est une méthode / méthode public OK

// echo "Panier1 > " .  $panier1->retirerArticle() . '<br>'; /!\ erreur !! méthode protected !! l'élément est accessible uniquement dans la classe où cela a été déclaré ainsi que dans les classes héritières

// echo "Panier1 > " . $panier1->affichageArticle() . '<br>'; /!\ erreur !! méthode private !! l'élément est accessible uniquement dans la classe où cela a été déclaré

$panier2 = new Panier;
echo '<pre>'; var_dump($panier2); echo '</pre>';

$panier2->nbProduits = 3;
echo "Nombre de produits dans le panier 2 : " . $panier2->nbProduits . '<br>';
/*
    Niveau de visibilité 
        - public : accessible de partout
        - protected : accessible dans la classe mère et hériotières
        - private : accessible dans la classe mère
    
    'new' est un mot clé permettant d'effectuer une instanciation
    une classe peut produire plusieurs objet. Nous pouvons effectuer plusieurs instanciation 'new'
    $panier1 représente l'objert issu de la classe 'Panier'
    La classe est le plan de construction / $panier1 représente un exemplaire de la classe
*/


























