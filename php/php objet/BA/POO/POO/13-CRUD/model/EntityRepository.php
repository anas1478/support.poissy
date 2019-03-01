<?php

namespace Model;

class EntityRepository
{
    private $db;
    public $table;
    public function getDb() // méthode permettant d'instancier la class PDO et de créer un objet
    {
        if(!$this->db) // seulement si $this->$db n'est pas remplie, si il y a pas de connexion, alors on la construit
        {
            try
            {
                $xml = simplexml_load_file('app/config.xml'); // simplexml_load_file() permet de convertir  le fichier XML en objet
                // echo '<pre>'; var_dump($xml); echo '</pre>';
                $this->table = $xml->table; // on associe le nom de la table du fichier XML à la propriété de la classe, cette propriété nous servira pour toute nos requêtes SQL (INSERT INTO $this->table)
                try
                {
                    $this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)); // connexion a la BDD, si jamais on change de BDD, nous n'aurons pas besoin de modifier ce code, c'est une code générique, c'est le fichier config que l'on modifiera
                    // echo '<pre>'; var_dump($this->db); echo '</pre>';
                    // echo '<pre>'; var_dump(get_class_methods($this->db)); echo '</pre>';
                }
                catch(\PDOException $e)
                {
                    die('Problème de connexion BDD : ' . $e->getMessage()); // On entre ici en cas de mauvaise connexion a la BDD
                }
            }
            catch(\PDOException $e)
            {
                die('Problème de fichier XML manquant');
            }
        }
        return $this->db; // On retourne la connexion, si elle est déjà présente
    }

    public function getFields() // méthode permettant de recolter les données et les champs / colonnes de la table. c'est un code générique on récupérera les données de nimporte quelle table
    {
        $q = $this->getDb()->query("DESC " . $this->table); // DESC : description de la table
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return array_splice($r, 1); // permet de ne pas récupérer le premier champs idEmployé dans le formulaire, dans la BDD grace a la fonction prédéfinie array_splice()
    }

    public function select($id) // méthode permettant de récupérerles données d'un employé via son id
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table . " WHERE id" . ucfirst($this->table) . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }

    public function selectAll()
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table); // requete permettant de selectionner toute une table, $this->table : représente dans notre cas  la table 'employe'
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

        // ucfirst($this->table) --> idEmploye
        // array_keys($_POST) --> permet de récupérer tous les indices du formulaire, tous les attributs 'name', c'est un code générique, quelque soit le formulaire, nous récupèrerons les bons indices
        // implode (',', array_keys($_POST)) --> implode() permet d'extraire tous les indices du formulaire séparé par une virgule
        // - Si l'id est connu en BDD, la requete REPLACE se comporte comme un UPDATE
        // - Si l'id n'est pas connu en BDD, la requete REPLACE se comporte comme un INSERT, ça permet de faire 2 requetes en une seule
    }
}

// $a = new EntityRepository;
// $a->getDb();

