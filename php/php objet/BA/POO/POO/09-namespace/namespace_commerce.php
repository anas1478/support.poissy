<?php

namespace Commerce1;

    class Commande
    {
        public $nbCommande = 1;
    }

    namespace Commerce2;

    class Produit
    {
        public $nbProduit = 22;
    }

    namespace Commerce3;

    class Panier
    {
        public $nbProduit = 2;
    }

    class Produit
    {
        public $nbProduit = 33;
    }

    //Les namespace permettent de classer mes classes. Il est possible de définir un namespace avec des accolades namespace Commerce3{} mais dans ce cas là, tout les namespace doivent être déclarés avec des accolades.