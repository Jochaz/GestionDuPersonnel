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
	      
	       <input type="text" name="login" id="login" />		
	       <label for="login"> : Login</label>       
	       <br />	      
	       <input type="password" name="pass" id="pass" /> 
	       <label for="pass"> : Votre mot de passe</label>
	       <br />
	       <input type="submit" value="Envoyer" />
		</form>
	</body>
</html>