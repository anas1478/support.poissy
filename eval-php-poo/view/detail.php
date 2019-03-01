<?php

?>

<ul class="col-md-4 offset-md-4 list-group text-center mb-4">
    <?php foreach($donnees as $key => $value): ?>
        <li class="list-group-item"><?= $value ?></li>
    <?php endforeach; ?>
</ul>