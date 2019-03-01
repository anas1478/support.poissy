<?php
session_start();

if(isset($_GET['action']) && $_GET['action'] == 'vider')
{
    unset($_SESSION['panier']);
}

if(isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array(26, 27, 28);
    echo "Produit présent dans le panier : " . implode($_SESSION['panier'], '-') . '<hr>';
    echo '<a href="?action=vider">Vider le panier</a>';
}
else
{
    echo '<a href="?action=create">Créer le panier</a>'; 
}

/*
    Jusqu'à présent vous avez parfois eu du mal à organiser le code, ce n'est toujours évident de mélanger HTML et PHP

    ARCHITECTURE MVC 
    1. Modèle (échange avec la BDD - REQ SQL)
    2. View (affichage et présentation des données - HTML/CSS)
    3. Controller (traitement - PHP)

    exemple : 
    - dans le model je fais une requèet qui va chercher tous le sproduits de la BDD
    - dans le controller je fais des traitements et décide d'afficher uniquement les jeans 10 par 10
    - dans la view je présente les données qui sorte du traitement (controller) issu de la req SQL (model)

    Avantages : 
        - clarté de l'architecture
        Si le design doit changer, vous pouvez demander à l'intégrateur de procéder aux mise à jour, il ne risquera pas de décapiter une accolade dans le code
        - Favorise le travail d'équipe et les mises à jour

    Inconvénients : 
        - Nombre de fichiers (trop complexe pour de petites applications)
    
        Le but d'une arcihtecture MVC est la séparation des couches (séparation des langages), c'est comme cela que fonctionne les CMS (drupal, wordpress etc...)
*/

