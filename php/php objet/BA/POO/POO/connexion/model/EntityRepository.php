<?php

namespace Model;

class EntityRepository
{
    private $db;
    public $table = "employes";
    public function getDb() 
    {
        if(!$this->db) 
        {
             $this->db = new \PDO("mysql:dbname='entreprise';host='localhost','root',''");
         
        }
        return $this->db;
    }

    public function getFields() 
    {
        $q = $this->getDb()->query("DESC " . $this->table); 
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return array_splice($r, 1);
    }

    public function select($id)
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table . " WHERE id" . ucfirst($this->table) . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }

    public function selectAll()
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table); 
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return $r;
    }

    public function delete($id)
    {
        $q = $this->getDb()->query("DELETE FROM " . $this->table . " WHERE id" . ucfirst($this->table) . '=' . (int) $id);
    }


    public function save()
    {
        $id  = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst($this->table) . ',' . implode(',', array_keys($_POST)) . ')VALUES  (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');


    }
}

