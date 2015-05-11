<?php
	$Login = $_POST['login'];
	$MDP = md5($_POST['pass']);

	include('connexion.php');

	//Recupère le contenu de la table administrateur
	$collectionAdministrateur = $db->Administrateurs;

	//Remplissage de la collection
	$Administrateurs = $collectionAdministrateur->find();	

	//Parcours de la collection
	foreach($Administrateurs as $Administrateur){
		//Test pour voir si la combo login/mdp est dans la base
		if ($Login == $Administrateur['login'] AND $MDP == $Administrateur['mdp']){
			session_start();
			//Renseignement de la supervariable $_SESSION
			$_SESSION['login'] = $Administrateur['login'];
			$_SESSION['ID'] = $Administrateur['_id'];
		}
	}
	//Redirection
	header('location: index.php');
?>
