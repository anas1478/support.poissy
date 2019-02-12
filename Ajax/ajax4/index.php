<?php 
	require_once('init.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--CSS BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- CDN JQUERY-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- FICHIER JQUERY -->
	<script src="ajax.js"></script>

	<title>affhicher</title>
</head>
<body>
	<div class="container text-center">
		<h1 class="display-4 text-center"> AJAX afficher JQUERY</h1>
		<hr>
		<form action="" method="POST" class="col-md-6 mx-auto">
			<label for="employes"><strong>Liste des employés</strong></label>
			<select name="employes" id="employes" class="custom-select custom-select-lg mb-3 text-center">
				<?php 
				$resultat = $bdd->query("SELECT * FROM employes");
					while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){	
							echo '<option value="'. $ligne['id_employes'] .'">' . $ligne['nom'] . '</option>';		
					}
				// query plutôt que exec pour faire un select		
				?>

			</select>
		</form>
		<br>
			
		<button type="submit" class="btn btn-info col-md-6" id="action">
			afficher
		</button>
			
		<br>
			
		<div id="resultat">
		
		
		
		</div>

	</div>
  
</body>
</html>