<?php
	session_start();
	if (empty($_SESSION['ID']))
		header('location: index.php');
	include('connexion.php');
	$employe = array("nom" => $_POST['nom'], "prenom" => $_POST['prenom'], "email" => $_POST['email'], "date_naissance" => $_POST['date_naissance'], "embauche" => array("date_entree" => date("d/m/y"), "salaire" => $_POST['salaire'], "fonction" => $_POST['fonction']), "numero_arrivee" => $_POST['numero_arrivee']);
	$db->Personnel->insert($employe);
	header('location: index.php');
?>