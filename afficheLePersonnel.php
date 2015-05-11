<!DOCTYPE html>
<html>
<?php
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Liste du personnel';
	//Importation de l'entete
	include('entete.php');
	?>
	<body>
		<?php include('navigation.php'); ?>
		<ul class="list-group">
			<?php
		  		include('connexion.php');
		  		$collectionPersonnel = $db->Personnel;
	            $Personnel = $collectionPersonnel->find();
	            foreach ($Personnel as $Personne) {
		  			echo '<li onclick="window.location.href=\'fiche.php?id='.$Personne['_id'].'\';" class="list-group-item">'.$Personne['nom'].' '.$Personne['prenom'].'</li>';
		  		}
		  	?>
		</ul>
	</body>
	<?php
		include('footer.php'); 
	?>
</html>