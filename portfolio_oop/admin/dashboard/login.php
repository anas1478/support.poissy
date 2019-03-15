
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">CONNEXION ADMIN</div>
      <div class="card-body">
        <form method="post" action="connect.php">
          <div class="form-group">
            <div class="form-label-group">
              <input name="pseudo" type="text" id="inputEmail" class="form-control" placeholder="pseudo" required="required" autofocus="autofocus">
              <label for="inputEmail">pseudo</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="mdp" type="password" id="inputPassword" class="form-control" placeholder="mot de passe" required="required">
              <label for="inputPassword">mot de passe</label>
            </div>
          </div>
         
          <button type="submit" class="btn btn-primary btn-block">CONNEXION</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
