<!DOCTYPE html>
<html>
<?php
	session_start();
	if (empty($_SESSION['ID']) AND empty($_GET['id'])) 
		header('location: index.php');
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Fiche';
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
		  		<p>
		  			Adresse email : <?php echo $Personne['email'];?><br/>
		  			Date de naissance : <?php echo $Personne['date_naissance'];?><br/>
		  			Numéro d'arrivé : <?php echo $Personne['date_naissance'];?><br/>
		  			Salaire : <?php echo $embauche['salaire'];?><br/>
				  	Fonction : <?php echo $embauche['fonction'];?><br/>
				  	Date entrée : <?php echo $embauche['date_entree'];?><br/>
				  	Numéro d'arrivé : <?php echo $Personne['numero_arrivee'];?>
		  		</p>
		   		<button type="button" class="btn btn-default btn-lg" onclick=<?php echo "window.location.href='update.php?id=".$Personne['_id']."'"?>>
				  	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier
				</button>
				
				<button type="button" class="btn btn-default btn-lg" onclick=<?php echo "window.location.href='delete.php?id=".$Personne['_id']."'"?>>
				  	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Supprimer
				</button>
		  </div>
		</div>
	</body>
	<?php
		include('footer.php'); 
	?>
</html>