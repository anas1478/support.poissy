<?php
                    // liste, Pichu
function recherche($tab, $elem)
{
    if(!is_array($tab))
    throw new Exception('vous devez envoyer un array'); // throw nous permet de nous envoyer dans le bloc catch et d'arrêter l'execution du code

    if(sizeof($tab) <= 0)
    throw new Exception('Vous devez envoyer un ARRAY avec du contenu');

    $position = array_search($elem, $tab);
    return $position;
}

//------------------------------------------------------------------------
$test = array();
$liste = array('Pichu', 'Pikachu', 'Raichu', 'Gorochu');

try // bloc d'essai, on va essayer d'effectuer les instructions suivantes dans le try
{
    echo "Le personnage se trouve à la position : <strong> " . recherche($liste, 'Pichu') . "</strong><hr>";
    echo "Le personnage se trouve à la position : <strong> " . recherche($liste, 'Pikachu') . "</strong><hr>";
    echo "Le personnage se trouve à la position : <strong> " . recherche($test, 'Raichu') . "</strong><hr>";
    echo "traitements...";//ne s'affiche pas, il n'y a pas de raison de continuer des traitements si l'un d'entre eux dysfonctionne, car les prochains traitements peuvent être dépendants de celui qui dysfonctionne.
}
catch(Exception $e) // bloc de capture, on va attraper les exceptions "Exception" sil y en a une qui est levée, $e représente l'Exception car en mettant le throw je n'ai pas pu mettre le nom de la variable puisque l'exception est stopée pour arriver ici. Try et catch fonctionnent ensemble. Il est possible de mettre plusieurs blocs try/catch à la suite.
{
    echo '<pre>'; print_r($e); echo '</pre>';
    echo "Message d'erreur : " . $e->getMessage() . " à la ligne  " . $e->getline() . " dans le fichier " . $e->getFile() . "<hr>";
}

//------------------------------------------------------------------------
echo "<hr><hr>";

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
    echo "Connexion réussie !";
}
catch(PDOException $e)// PDOException est une classe prédéfinie en PHP permettant d'attraper les exceptions PDO, en cas d'erreur dans le bloc 'try', on tombe directement dans le bloc 'catch'
{
    //$e reprsésente un objet de la classe "PDOException" qui contient des méthodes permettant d'afficher les exceptions PDO.
    echo "<pre>"; print_r($e); echo "</pre>";
    echo "<pre>"; print_r(get_class_methods($e)); echo "</pre>";
    echo "Message d'erreur : " . $e->getMessage() . " à la ligne  " . $e->getline() . " dans le fichier " . $e->getFile() . "<hr>";
}