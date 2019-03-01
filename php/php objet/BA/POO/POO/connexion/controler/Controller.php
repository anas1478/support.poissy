<?php

namespace Controller;

class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \model\EntityRepository; 
    }
    public function handlerRequest() // permet de savoir ce que l'internaute demande (afficher/modifier/supprimer), action de l'internaute
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL; // si op est défini dans l'URL on le récupère, on le stock dans $op sinon, si rien n'est défini dans l'URL, on stock NULL dans $op
        try
        {
            if($op == 'add' || $op == 'update') $this->save($op); // si on ajoute ou modifie un employé, on appel la méthode save()
            elseif($op == 'select') $this->select(); // si on selectionne un employé, on appel la méthode select()
            elseif($op == 'delete') $this->delete(); // si on supprime un employé, on appel la méthode delete()
            else $this->selectAll(); // permettra d'afficher l'ensemble des employés 
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage()); // permet d'envoyer un message et d'arreter le script si il y a une erreur dans le bloc try
        }
    }
    public function selectAll()
    {
        // echo "Méthode selectAll()";
        // $r = $this->db->selectAll();
        // echo "<pre>" ; print_r($r); echo "</pre>";
        $this->render("layout.php", "donnees.php", array(
            "title"=>"Toutes les données",
            "donnees"=>$this->db->selectAll(),
            "fields"=>$this->db->getFields(),
            "id" => "id" . ucfirst($this->db->table) // affiche idEmploye, cela servira a pointer sur l'indice idEmploye du tableau de données envoyer dans le layout pour les liens voir/modifier/supprimer
        ));
    }
    // $this->render('layout.php', 'donnees.php', 'parametres');
    public function render($layout, $template, $parameters = array())
    {
        extract($parameters); // permet d'avoir des indices du tableau comme variable 
        ob_start(); // commence la temporisation, ob_start() démarrer la temporisation de sortie
        require "view/$template";
        // $content = require "view/$template";
        $content = ob_get_clean(); // tout ce qui se trouve dans le template sera stocké dans $content
        // $content = "view/$template";

        ob_start(); // temporiser la sortie de l'affichage
        require "view/$layout";
        return ob_end_flush(); // libérer l'affichage de sortie et fait tout apparaitre sur la page
    }

    public function redirect($url) // méthode premettant d'effectuer une redirection
        {
            header("Location:" . $url); // fonction prédéfinie permettant d'effectuer une redirection
        }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $r = $this->db->delete($id);
        $this->redirect('index.php'); // on redirige après la suppression vers la page index.php
    }

     

    public function save($op)
    {
        $title = $op;

        $id = isset($_GET['id']) ? $_GET['id'] : NULL; // permet de savoir si un id a été envoyé dans l'URL, si on clique sur 'modifier' on envoie l'id dans l'URL et on le récupère, sinon c'est un ajout

        $values = ($op == 'update') ? $this->db->select($id) : ''; // si on a envoyé un id dans l'URL, on l'envoie en argument de la méthode select() de EntityRepository, cela permettra de selectionner toutes les donées de l'employé pour la modification

        // var_dump($values);

        if($_POST)
        {
            $r = $this->db->save(); // lorque l'on valide le formulaire d'ajout, on execute la methode save() du fichier EntityRepository.php
            $this->redirect('index.php'); //on redirige vers la page index.php
        }
        $this->render('layout.php', 'donnees-form.php', array(
            "title" => "Données : $title",
            "op" => $op,
            "fields" => $this->db->getFields(), // c'est ce qui va nous permettre de récupérer le nom des champs pour les définir de façon générique
            "values" => $values // permet de récupérer toutes les données de l'employé en cas de modifications 
        ));
    }

    public function select()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $r = $this->db->select($id);

        $this->render("layout.php", "details.php", array(
            "title"=>"Détails de l'employé",
            "donnees"=>$this->db->select($id),
            "fields"=>$this->db->getFields(),
            "id" => "id" . ucfirst($this->db->table)
        ));
    }
}
