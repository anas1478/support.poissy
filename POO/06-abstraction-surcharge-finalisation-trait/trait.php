<?php 
trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return "Affichage des produits !!";
    }
}
//-------------------------------------------------------
trait TMembre
{
    public function affichageMembres()
    {
        return "Affichage des membres !!";
    }
}
//-------------------------------------------------------
class Site
{
    use TPanier, TMembre;
}
//-------------------------------------------------------
$site = new Site;
echo '<pre>'; var_dump($site); echo '</pre>';
echo '<pre>'; var_dump(get_class_methods($site)); echo '</pre>';

echo $site->affichageProduits() . '<hr>';
echo $site->affichageMembres() . '<hr>';
echo "Nombre de produits : " . $site->nbProduit . '<hr>';

/*
    Les traites ont été inventés pour repousser les limites de l'héritage. Il est possible pour une classe d'hériter de plusieurs traits en même temps
    Un trait est un regroupement de méthodes pouvant être importées dans une classe
*/

