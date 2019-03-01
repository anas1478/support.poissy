<?php 

?>

<div><a href="?op=add" class="btn btn-large btn-info mb-2"><i class="fas fa-plus"></i> Ajouter une nouvelle donnée</a></div>


<table class="table table-bordered text-center">
    <thead><tr>
        <th>ID</th>
    <?php foreach($fields as $value): ?>
        <th><?= $value['Field'] ?></th>
    <?php endforeach; ?>
    
    </tr></thead>
    <tbody>
    <?php foreach($donnees as $value): 
      
        ?>
        <tr>
            <td><?= implode('</td><td>', $value) ?></td>
            <td><a href="?op=select&id=<?= $value[$id] ?>" class="text-dark"><i class="fas fa-search"></i></a></td>
            <td><a href="?op=update&id=<?= $value[$id] ?>" class="text-dark"><i class="fas fa-wrench"></i></a></td>
            <td><a href="?op=delete&id=<?= $value[$id] ?>" class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>