<?php
class Societe
{
    public $adresse;
    public $ville;
    public $cp;
                        // villes, Paris
    public function __set($nom, $valeur)
    {
        echo "La propriété <strong>$nom</strong> n'existe pas, la valeur <strong>$valeur</strong> n'a donc pas été affecté!<hr>";
    }
    // __set() est une méthode magiques qui se déclenche uniquement en cas de tentative d'affectation sur une propriété qui n'existe pas
                        // titre
    public function __get($nom)
    {
        echo "La propriété <strong>$nom</strong> n'existe pas, on ne peut donc pas l'afficher<hr>";
    }
    // __get() est une méthode magique qui s'exeute uniquement en cas de tentative d'affichage d'une propriété qui n'existe pas, donc que nous n'avons pas déclarée

    // __call() : afficher un message d'erreur pour la méthode gfzefzefze(1,2,3) qui n'existe pas
    public function __call($nom, $argument)
    {
        echo "La méthode <strong>$nom</strong> n'existe pas, Les arguments étaient : <strong>" . implode("-", $argument) . "</strong>";
    }
    // __call() est une méthode magique qui s'execute uniquement en cas de tentative d'exeuction d'une méthode qui n'existe pas, donc qui n'a pas été déclarée
}

$societe1 = new Societe;

$societe1->villes = "Paris"; // tentative d'affectation à une propriété qui n'a pas été déclarée

echo $societe1->titre; // tentative d'affichage d'une propriété qui n'a pas été déclarée

echo $societe1->gfzefzefze(1,2,3); // tentative d'execution d'une méthode qui n'a pas été déclarée

echo '<pre>'; var_dump($societe1); echo '</pre>';

/*
    Il y a trop d'erreur "sale" en PHP, les méthodes magiques permettent d'afficher des erreurs "propres" en français
*/





