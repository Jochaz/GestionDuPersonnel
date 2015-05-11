<!DOCTYPE html>
<html>
<?php
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Connexion';
	//Importation de l'entete
	include('entete.php');
	?>
	<body>
		<div class="container">
		  <h2>Connexion au module de gestion du personnel :</h2>
		  <form class="form-inline" role="form" method="post" action="traitement.php">
		    <div class="form-group">
		      <label for="text">Login :</label>
		      <input type="text" class="form-control" id="login" name="login">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
		      <input type="password" class="form-control" id="pass" name="pass">
		    </div>
		    <button type="submit" class="btn btn-default">Se connecter</button>
		  </form>
		</div>
	</body>
	<?php
		include('footer.php'); 
	?>
</html>