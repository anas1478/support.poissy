<?php
require_once "inc/init.inc.php";
require_once "inc/haut.inc.php";

if(internauteEstConnecte() || internauteEstConnecteEtEstAdmin()){	
?>	
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">

				<div class="card-body">                      
					<div class="row">
						<div class="col-12">
							<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Informations</a>
								</li>
							</ul>
							<div class="tab-content ml-1" id="myTabContent">
								<div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">	

								<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">photo</label>
										</div>
										<div class="col-md-8 col-6">
										<img src="<?php echo RACINE_SITE . $_SESSION['membre']['photo'] ?>" class="rounded float-left" alt="votre photo de profil">
										
										</div>
									</div>	
									<hr>		
									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">Nom et prénom</label>
										</div>
										<div class="col-md-8 col-6">
											<?php echo $_SESSION['membre']['nom'] . " " . $_SESSION['membre']['prenom']; ?>
										</div>
									</div>
									<hr />

									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">Pseudo</label>
										</div>
										<div class="col-md-8 col-6">
										<?php echo $_SESSION['membre']['pseudo'] ?>
										</div>
									</div>
									<hr />									
									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">Email</label>
										</div>
										<div class="col-md-8 col-6">
										<?php echo $_SESSION['membre']['email'] ?>
										</div>
									</div>
									<hr />
									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">Civilite</label>
										</div>
										<div class="col-md-8 col-6">
										<?php if($_SESSION['membre']['civilite'] == "m") : ?>
										Homme
										<?php else : ?>
										Femme
										<?php endif ?>
										</div>
									</div>
									<hr />
									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">Ville</label>
										</div>
										<div class="col-md-8 col-6">
										<?php echo $_SESSION['membre']['ville'] ?>
										</div>
									</div>
									<hr />
									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">Code postal</label>
										</div>
										<div class="col-md-8 col-6">
										<?php echo $_SESSION['membre']['cp'] ?>
										</div>
									</div>
									<hr />
									<div class="row">
										<div class="col-sm-3 col-md-4 col-5">
											<label style="font-weight:bold;">adresse</label>
										</div>
										<div class="col-md-8 col-6">
										<?php echo $_SESSION['membre']['adresse'] ?>
										</div>
									</div>					
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}else{
	header("location: connexion.php");
}

 require_once('inc/bas.inc.php');
?>