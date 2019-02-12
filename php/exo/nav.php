<nav>

<ul class="nav nav-pills nav-fill">
<?php if(empty($_SESSION['pseudo'])) : ?>
  <li class="nav-item">
    <a class="nav-link bg-secondary text-warning"href="connection.php">connection</a>
  </li>
<?php endif ?>
  <li class="nav-item">
    <a class="nav-link bg-warning text-muted" href="article.php">article</a>
  </li>    
  <?php if(!empty($_SESSION['pseudo'])) : ?>
  
  <li class="nav-item">
    <a class="nav-link bg-warning text-muted" href="?deconnection=1">déconnexion</a>
  </li>
  <?php endif ?>
</ul>
</nav>

<?php 
  if(isset($_GET['deconnection']) && $_GET['deconnection']=='1'){
      session_destroy();
      header('location: connection.php');
  }
  ?>