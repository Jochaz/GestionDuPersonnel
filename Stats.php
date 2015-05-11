<!DOCTYPE html>
<html>
<?php
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Statistiques';
	//Importation de l'entete
	include('entete.php');
	?>
	<body>
		<?php include('navigation.php');
			  include('connexion.php'); 
			  $SalaireMin = 0;
			  $SalaireMax = 0;
			  $SalaireMoyen = 0;
			  $cpt = 0;
			  $nb = 0;
			  $collectionPersonnel = $db->Personnel;
	          $Personnel = $collectionPersonnel->find();
	          foreach ($Personnel as $Personne) {
	          	$embauche = $Personne['embauche'];
	          	if ($SalaireMin == 0)
	          		$SalaireMin = $embauche['salaire'];

	          	if ($SalaireMin > $embauche['salaire'])
	          		$SalaireMin = $embauche['salaire'];

	          	if ($SalaireMax < $embauche['salaire'])
	          		$SalaireMax = $embauche['salaire'];
	          	$cpt = $cpt + $embauche['salaire'];
	          	$nb++;
	          }
	          $SalaireMoyen = $cpt / $nb;
	    ?>
	    <div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Statistiques</h3>
		  </div>
		  <div class="panel-body">
		    	<p>
		    		Nombre d'employé : <?php echo $nb; ?> <br/>
		    		Salaire minimum : <?php echo $SalaireMin; ?>€ <br/>
		    		Salaire maximum : <?php echo $SalaireMax; ?>€ <br/>
		    		Salaire moyen : <?php echo round($SalaireMoyen, 2); ?>€ <br/>
 		    	</p>
		  </div>
		</div>
	</body>
	<?php
		include('footer.php'); 
	?>
</html>