<?php

// var_dump($donnees); ?>

<div class="card d-block m-auto" style="width: 18rem;">
  <img src="img/THOR.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center"><?= ucfirst($donnees['prenom']) . " " . ucfirst($donnees['nom']) ?></h5>
    <p class="card-text text-center"><?= $donnees['service'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-center"><?= ucfirst($donnees['sexe']) ?></li>
    <li class="list-group-item text-center"><?= $donnees['dateEmbauche'] ?></li>
    <li class="list-group-item text-center"><?= $donnees['idSecteur'] ?></li>
  </ul>
</div> <br>