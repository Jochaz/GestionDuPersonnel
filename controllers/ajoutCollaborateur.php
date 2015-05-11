<?php

if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['date_naissance']) || empty($_POST['salaire']) || empty($_POST['email']) || empty($_POST['poste']) || empty($_POST['date_entree']) )
	include('../views/ajouterCollaborateur.php');
else
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date_naissance = $_POST['date_naissance'];
	$salaire = $_POST['salaire'];
	$email = $_POST['email'];
	$poste = $_POST['poste'];
	$date_entree = $_POST['date_entree'];

	$collection = $db->Personnel;
	$query= array("nom" => $nom, "prenom" => $prenom, "mail" => $email);
	if ($collection->findOne($query) != null)
	{
		$json = '{"nom":"'.$nom.'","prenom":"'.$prenom.'","email":"'.$email.'","date_naissance":"new Date(\''.$date_naissance.'\')","embauche":{"salaire":'.$salaire.',"fonction":"'.$poste.'","date_entree":"new Date(\''.$date_entree.'\')"}}';
		$tableau_insert = json_decode($json, true);
		$collection->insert($tableau_insert);
		echo 'ok';
	}
	
}