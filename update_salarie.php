<!DOCTYPE html>
<html>
<?php
	//Renseignement de la variable page pour savoir ou on se situe
	$page = 'Connexion';
	//Importation de l'entete
	include('entete.php');
	
	
	
	?>
	<body>
		<!-- Formulaire de mise à jours des données -->
		<form method="post" action="update_salarie2.php">
			<table>
				<tr>
					<th>Libellé</th>
					<th>Données actuelles</th>
					<th>Nouvelles données</th>
				</tr>
				<tr>
					<td>Nom</td>
					<td></td>
					<td><input type="text" name="nom" id="nom" /></td>
				</tr>
				<tr>
					<td>Prénom</td>
					<td></td>
					<td><input type="text" name="prenom" id="prenom" /></td>
				</tr>
				<tr>
					<td>Email</td>
					<td></td>
					<td><input type="text" name="mail" id="mail" /></td>
				</tr>
				<tr>
					<td>Date de naissance</td>
					<td></td>
					<td><input type="text" name="date_naissance" id="date_naissance" /></td>
				</tr>
				<tr>
					<td>Salaire</td>
					<td></td>
					<td><input type="text" name="salaire" id="salaire" /></td>
				</tr>
				<tr>
					<td>Fonction</td>
					<td></td>
					<td><input type="text" name="fonction" id="fonction" /></td>
				</tr>
				<tr>
					<td>Date d'entrée</td>
					<td></td>
					<td><input type="text" name="date_entree" id="date_entree" /></td>
				</tr>
				<tr>
					<td>Numéro d'arrivée</td>
					<td></td>
					<td><input type="text" name="numero_arrivee" id="numero_arrivee" /></td>
				</tr>
			</table>
			<center>
			<br/>
			<input type="submit" value="Mettre à jours les données" />
			</center>
		</form>
	</body>
</html>