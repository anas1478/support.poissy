<?php require_once '../functions.php';
nonConecter();
  
 require_once 'entity.php';
 handler();
?>
<!DOCTYPE html>

<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

  <title> Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <!-- <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a> -->

  

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">  
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="?deco=deco" data-toggle="modal" data-target="#logoutModal">se déconecter</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- nav-->
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="?op=utilisateur&f=selAll">utilisateur</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?op=competences&f=selAll">compétences</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?op=cv&f=selAll&f=selAll">cv</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?op=formation&f=selAll">formation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?op=realisation&f=selAll">réalisation</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="?op=experiences&f=selAll">experiences</a>
  </li>
  
</ul>

       <!-------------------------------------   div vide pour afficher les tables en JS ------------------------------------------>
       <table class="table table-dark">
          <?php 
            
            // echo "<pre>";
            // var_dump($content);
            // echo "</pre>";
            

            //pour recuperer que les valeur
        // echo"<pre>";    
        // var_dump($content);
        // echo"</pre>";  
        echo "<tr>";  
            foreach($content as $c => $v) {
                
              echo "<td>".$c."</td>";
             
            }
            echo"<td>modifier</td>";
            echo"<td>supprimer</td>";
            
            
             echo "</tr><tr>";  

            foreach($content as $v) {
              echo "<td>".$v."</td>";
              
            }
            echo"<td><a href='?op=modif'><i class='fas fa-pencil-alt'></i></a></td>";
            echo"<td><a href='?op=supp'><i class='far fa-trash-alt'></i></a></td>";
            
        echo "</tr>";  
              var_dump($content);
          ?>
      </table>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Anas YOUSFI <?php date("Y"); ?></span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">êtes vous sur de vouloir vous déconnecter</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">annuler</button>
          <a class="btn btn-primary" href="login.php">déconnexion</a>
          <a class="btn btn-primary" href="../../DarkJoe-master/index.php">le site</a>
        </div>
      </div>
    </div>
  </div>
<!------js d'affichage de table------->
<script src="js/js.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
