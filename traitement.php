<?php
	$Login = $_POST['login'];
	$MDP = md5($_POST['pass']);
	include('connexion.php');

	$collectionAdministrateur = $db->administrateurs;
	$Administrateurs = $collectionAdministrateur->find();
	foreach($Administrateurs as $Administrateur){
		if ($login == $auteur['login'] AND $MDP == md5($auteur['mdp'])){
			session_start();
			$_SESSION['login'] = $auteur['pseudo'];
			$_SESSION['ID'] = $auteur['_id'];
			$connecte = true;
		}
	}
?>