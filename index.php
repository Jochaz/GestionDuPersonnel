<?php 
  //Initialisation de la session
  session_start();
  //Si la super variable $_SESSION est vide l'utilisateur est déconnecté
  if (empty($_SESSION['ID'])){
  	//On affiche la page de connexion
  	include('connexionAdmin.php');		
  } else {
  	//Sinon on affiche la page de la liste du personnel
  	include('afficheLePersonnel.php');
  }
?>