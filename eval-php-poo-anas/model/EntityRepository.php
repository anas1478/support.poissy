<?php

namespace model;

class EntityRepository
{
    private $db;
    public $table;
    public $table2;
    public $table3;
    public function getDb() // méthode permettant d'instancier la classe PDO et de créer un objet
    {
        if(!$this->db) // seulement si $this->db n'est pas rempli, si il n'y a pas de connexion, alors on la construit
        {
            try
            {
                $xml = simplexml_load_file('app/config.xml'); 
              
                $this->table = $xml->table; 
                $this->table2 = $xml->table2; 
                $this->table3 = $xml->table3; 
                try
                {
                    $this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)); 
                }
                catch(\PDOException $e) // on entre ici en cas de mauvaise connexion à la BDD
                {
                    die('Problème de connexion BDD ' . $e->getMessage());
                }
            }
            catch(\PDOException $e)
            {
                die('Problème de fichier XML manquant');
            }
        }
        return $this->db; // on retourne la connexion
    }

    public function getFields() 
    {

        $q = $this->getDb()->query("DESC " . $this->table); 
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return array_splice($r, 1); 
    }

    public function select($id) 
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table . " WHERE id_" . ucfirst($this->table) . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }
    public function select2($id) 
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table2 . " WHERE id_" . ucfirst($this->table2) . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }
    public function select3($id) 
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table3 . " WHERE id_" . ucfirst($this->table3) . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }

    public function selectAll()
    {
      
        $q = $this->getDb()->query("SELECT * FROM " . $this->table);
        $r = $q->fetchAll(\PDO::FETCH_ASSOC); 
        return $r;
    }
    public function selectAllConducteur()
    {
      
        $q = $this->getDb()->query("SELECT * FROM " . $this->table2); //  requete permettant de selectionner toute une table, 
        $r = $q->fetchAll(\PDO::FETCH_ASSOC); 
        return $r;
    }
    public function selectAllAssociation()
    {
      
        $q = $this->getDb()->query("SELECT * FROM " . $this->table3); 
        $r = $q->fetchAll(\PDO::FETCH_ASSOC); 
        return $r;
    }

    public function save()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id'.'_'. ucfirst($this->table) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');

    
    }
    public function save2()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id'.'_'. ucfirst($this->table2) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');

    
    }
    public function save3()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id'.'_'. ucfirst($this->table3) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');

    
    }

    public function delete($id)
    {                                   
        $q = $this->getDb()->query("DELETE FROM " . $this->table . " WHERE id_".ucfirst($this->table) . '='. (int) $id);

       
    }
    public function delete2($id)
    {                                   
        $q = $this->getDb()->query("DELETE FROM " . $this->table . " WHERE id_".ucfirst($this->table2) . '='. (int) $id);

       
    }
    public function delete3($id)
    {                                   
        $q = $this->getDb()->query("DELETE FROM " . $this->table . " WHERE id_".ucfirst($this->table3) . '='. (int) $id);

       
    }
}

