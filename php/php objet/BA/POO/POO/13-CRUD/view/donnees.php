<?php

// var_dump($donnees);

?>

<div><a href="?op=add" class="btn btn-large btn-dark"><i class="fas fa-plus"></i> Ajouter une nouvelle donnée</a></div>

<!-- Faites en sorte d'avoir 3 colonnes en plus :
        - une colonne permettant de voir le détail de l'employé
        - une colonne pour modifier
        - une colonne pour supprimer
-->
<table class="table table-bordered text-center table-striped table-info">
<thead class="bg-info text-white"><tr>
    <th>ID</th><!-- à cause du array_splice() permettant de ne pas afficher le champs idEmployes dans le formulaire d'ajout, on déclare manuellement un entête, sinon décalage -->
    <?php foreach($fields as $value): ?>
        <th><?= $value['Field'] ?></th>
<?php endforeach; ?>
        <th>Détails</th>
        <th>Modifier</th>
        <th>Supprimer</th>
</tr>
</thead>
<tbody>
    <?php foreach($donnees as $value): 
        // echo '<pre>'; print_r($value); echo '</pre>';
        //$value possède un tableau ARRAY avecc les données d'un employé par tour de boucle
        //implode() permet d'extraire  les données de chaque  tableau ARRAY par employé
        ?>
        <tr>
            <td><?= implode('</td><td>', $value) ?></td>
            <td><a href="?op=select&id=<?=$value[$id] ?>" class="text-dark"><i class="far fa-eye"></i></a>
            <td><a href="?op=update&id=<?=$value[$id] ?>" class="text-dark"><i class="fas fa-edit"></i></a>
            <td><a href="?op=delete&id=<?=$value[$id] ?>" class="text-dark"><i class="fas fa-trash-alt"></i></a>
        </tr>
<?php endforeach; ?>
</tbody>
</table>