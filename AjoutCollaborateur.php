<!DOCTYPE html>
<html>
<?php
	session_start();
	if (empty($_SESSION['ID']) AND empty($_GET['id'])) 
		header('location: index.php');
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Ajout d\'un utilisateur';
	//Importation de l'entete
	include('entete.php');
	?>
	<body>
		<?php 
			include('navigation.php'); 
			include('connexion.php');
		?>
		<form class="form-horizontal" method="post" action="ajout.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Ajout d'un employé</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nom">Nom</label>  
			  <div class="col-md-4">
			  <input id="nom" name="nom" required placeholder="Nom" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="prenom">Prénom</label>  
			  <div class="col-md-4">
			  <input id="prenom" name="prenom" required placeholder="Prénom" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">Email</label>  
			  <div class="col-md-4">
			  <input id="email" name="email" required placeholder="Email" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="date_naissance">Date de naissance</label>  
			  <div class="col-md-4">
			  <input id="date_naissance" name="date_naissance" required placeholder="Date de naissance" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="salaire">Salaire</label>  
			  <div class="col-md-4">
			  <input id="salaire" name="salaire" required placeholder="Salaire" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="fonction">Fonction</label>  
			  <div class="col-md-4">
			  <input id="fonction" name="fonction" required placeholder="Fonction" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="numero_arrivee">Numéro arrivée</label>  
			  <div class="col-md-4">
			  <input id="numero_arrivee" name="numero_arrivee" required placeholder="Numéro arrivée" class="form-control input-md" type="text">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="valider"></label>
			  <div class="col-md-4">
			    <button id="valider" name="valider" class="btn btn-primary">Enregistrer</button>
			  </div>
			</div>

			</fieldset>
		</form>

	</body>
	<?php
		include('footer.php'); 
	?>
</html>