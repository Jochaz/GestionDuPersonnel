<!DOCTYPE html>
<html>
<?php
	session_start();
	if (empty($_SESSION['ID']) AND empty($_GET['id'])) 
		header('location: index.php');
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Modification';
	//Importation de l'entete
	include('entete.php');
	?>
	<body>
		<?php 
			include('navigation.php'); 
			include('connexion.php');
			$collectionPersonnel = $db->Personnel;
			$Personne = $collectionPersonnel->findOne(array('_id' => new MongoId($_GET['id'])));	
			$embauche = $Personne['embauche'];		
		?>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title"><?php echo $Personne['nom'].' '.$Personne['prenom']; ?></h3>
		  </div>
		  <div class="panel-body">
		  	<form class="form-horizontal" method="post" action="updateend.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Modification :</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">Email</label>  
				  <div class="col-md-4">
				  <input id="email" name="email" placeholder="" class="form-control input-md" type="text" value=<?php echo $Personne['email']; ?>>
				    
				  </div>
				</div>
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="modifier"></label>
				  <div class="col-md-4">
				    <button id="modifier" name="modifier" class="btn btn-primary" onclick=<?php echo "window.location.href='updateEnd.php'"?>>Modifier</button>
				  </div>
				</div>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				</fieldset>
				</form>
		  </div>
		</div>
	</body>
	<?php
		include('footer.php'); 
	?>
</html>