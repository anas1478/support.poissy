<?php 
require_once("init.php");
$tab = array();

if($_POST['type'] == "afficher") {
    //------- REQUETE 'ALLER' AJAX
    $result = $bdd->query("SELECT * FROM employes WHERE id_employes = '$_POST[id]'");
    // 701
    //$result = $bdd->exec("DELETE FROM employes WHERE id_employes = 999");
    // On test la requete PHP, en fait si il y a des erreurs dans le fichiers PHP, les requetes AJAX ne passeront pas ! TOUJOURS CONTROLER LES FICHIERS PHP !!



    //------- REQUETE 'RETOUR' AJAX
    // $result = $bdd->query("SELECT * FROM employes");
    $tab['resultat'] = '
            <table class="table">
            <thead>
            <tr>';
        
    for($i = 0; $i < $result->columnCount(); $i++) {
        $col = $result->getColumnMeta($i);
        $tab['resultat'] .= "<th>" . $col['name'] . "</th>";
    }
    
    $tab['resultat'] .= '
            </tr>
            </thead>
            <tbody>
            <tr>';

    while($employe = $result->fetch(PDO::FETCH_ASSOC))
    {
        foreach($employe as $key => $value) {
            $tab['resultat'] .= "<td>" . $value . "</td>";
        }
    }
    $tab['resultat'] .= '</tr></tbody>';
    $tab['resultat'] .= '</table>';    
}
if($_POST['type'] == "supprimer") {
    //------- REQUETE 'ALLER' AJAX
    $result = $bdd->exec("DELETE FROM employes WHERE id_employes = '$_POST[id]'");
    // 701
    //$result = $bdd->exec("DELETE FROM employes WHERE id_employes = 999");
    // On test la requete PHP, en fait si il y a des erreurs dans le fichiers PHP, les requetes AJAX ne passeront pas ! TOUJOURS CONTROLER LES FICHIERS PHP !!



    //------- REQUETE 'RETOUR' AJAX
    $result = $bdd->query("SELECT * FROM employes");
    $tab['resultat'] = '<div class="form-group">';
    $tab['resultat'] .= '<label for="personne">Liste des employés</label>';
    $tab['resultat'] .= '<select class="form-control" id="personne" name="personne">';
    while($employe = $result->fetch(PDO::FETCH_ASSOC))
    {

    $tab['resultat'] .= "<option value='$employe[id_employes]'>$employe[nom]</option>";
    }
    $tab['resultat'] .= '</select>';
    $tab['resultat'] .= '</div>';
}

echo json_encode($tab);



