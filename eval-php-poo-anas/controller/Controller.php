<?php

namespace Controller;
error_reporting(0);
class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \model\EntityRepository; 
    }
    public function handlerRequest() 
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL; 
        try
        {   
            
            if($op == 'conducteur') $this->selectAllConducteur();
            elseif($op == 'association') $this->selectAllAssociation();
            else $this->selectAll(); 
            if($op == 'add' || $op == 'update') $this->save($op); 
            // elseif($op == 'add' || $op == 'update') $this->save2($op); 
            // elseif($op == 'add' || $op == 'update') $this->save3($op); 
            if($op == 'select') $this->select();
            elseif($op == 'select') $this->select2();
            elseif($op == 'select') $this->select3();
            if($op == 'delete') $this->delete();
            elseif($op == 'delete') $this->delete2();
            elseif($op == 'delete') $this->delete3();
          
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage()); 
        }
    }
    public function selectAll()
    {
        
        $this->render('layout.php', 'donnees.php', array(
            'title' => 'Toute les vehicules',
            'donnees' => $this->db->selectAll(),
            'fields' => $this->db->getFields(),
            'id' => 'id_' . ucfirst($this->db->table) 
        ));
    }
    public function selectAllConducteur()
    {
        
        $this->render('layout.php', 'donnees.php', array(
            'title' => 'les conducteurs',
            'donnees' => $this->db->selectAllConducteur(),
          
            'id' => 'id_' . ucfirst($this->db->table2) 
        ));
    }
    public function selectAllAssociation()
    {
        
        $this->render('layout.php', 'donnees.php', array(
            'title' => 'Toute les associations',
            'donnees' => $this->db->selectAllAssociation(),
            
            'id' => 'id_' . ucfirst($this->db->table3) 
        ));
    }
    
    public function render($layout, $template, $parameters = array())
    {
        extract($parameters);  
        ob_start(); 
      
        require "view/$template";

       
        $content = ob_get_clean();
       

        ob_start(); 
       
        require "view/$layout";
        return ob_end_flush();
    }

    public function redirect($url) // méthode permettant d'effectuer une redirection
    {
        header("Location:" . $url); 
    }

    public function select() 
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $this->render('layout.php', 'detail.php', array(
            "title" => "Détail: $id",
            "donnees" => $this->db->select($id)
        ));
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $r = $this->db->delete($id);
        $this->redirect('index.php'); 
    }

    public function save($op)
    {
        $title = $op;

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $values = ($op == 'update') ? $this->db->select($id) : '';
        if($_POST)
        {
            $r = $this->db->save(); 
            $this->redirect('index.php'); 
        }
        
        $this->render('layout.php', 'donnees-form.php', array(
            "title" => "Donnée : $title",
            "op" => $op,
            "fields" => $this->db->getFields(), 
            "values" => $values 
        ));
    }
}