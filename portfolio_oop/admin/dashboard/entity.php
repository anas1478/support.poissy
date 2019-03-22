<?php
require_once '../../src/init.php';
$content = "";
function handler() // permet de savoir ce que l'internaute demande (afficher/modifier/supprimer), action de l'internaute
    {
        global $xml;
        global $content;
        $op = isset($_GET['op']) ? $_GET['op'] : NULL; 
        $f = isset($_GET['f']) ? $_GET['f'] : NULL;// si op est définie dans l'URL, on le récupère, on le stock dans $op sinon, si rien n'est défini dans l'URL, on stock NULL dans $op
        
             if($op == 'cv') {
                $content = selectAll($xml->table2); 
             }
             if($op == 'utilisateur') { 
                $content = selectAll($xml->table); 
             }
             if($op == 'competences') {
                 
                $content = selectAll($xml->table3);
             } 
             if($op == 'formation') {
                 
                $content = selectAll($xml->table4);
             }
             if($op == 'realisation') {
                 
                $content = selectAll($xml->table5);
             }



/////////-------------------------------------------------_______________________________
             if( $op =='modif') {
                $content = select(1,$xml->table); 
             }
            //  if($op == 'utilisateur') { 
            //     $content = selectAll($xml->table); 
            //  }
            //  if($op == 'competences') {
                 
            //     $content = selectAll($xml->table3);
            //  } 
            //  if($op == 'formation') {
                 
            //     $content = selectAll($xml->table4);
            //  }
            //  if($op == 'realisation') {
                 
            //     $content = selectAll($xml->table5);
            //  }
                                                       
    }


//------------------------------- choix tables (ex: cv ) ------  ---------------------------------------------


     function select($id,$table)
    {
        global $db;
        $q = $db->query("SELECT * FROM " . $table . " WHERE id_" .$table . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }
    

    function selectAll($table)
    {
        global $db;
     
        $q = $db->query("SELECT * FROM " .$table); 
        $r = $q->fetch(\PDO::FETCH_ASSOC); 
        
        return $r;
    }


   function delete($id)
    {
        global $db;
        $q = $db->query("DELETE FROM " . $table . " WHERE id" . ucfirst($this->table) . '=' . (int) $id);

        
    }
