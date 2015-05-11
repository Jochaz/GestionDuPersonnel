<!DOCTYPE html>
<html>
<?php
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Connexion';
	//Importation de l'entete
	include('entete.php');
	?>
	<body>
		<!-- Formulaire de connexion -->
		<form method="post" action="traitement.php">
	      
	       <div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Login</span>
			  <input type="text" class="form-control" id="login" name="login" placeholder="Username" aria-describedby="basic-addon1">	      
			  <br />	
			  <span class="input-group-addon" id="basic-addon1">Mot de passe</span>
			  <input type="text" class="form-control" id="pass" name="pass" placeholder="Username" aria-describedby="basic-addon1">
			</div>
	       <input type="submit" value="Envoyer" />
		</form>
	</body>
	<?php include('footer.php'); ?>
</html>