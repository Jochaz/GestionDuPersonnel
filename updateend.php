<?php 
	session_start();
	if (empty($_SESSION['id']) or (empty($_POST['id'])))
		header('location: index.php');
	include('connexion.php');
	$collectionPersonnel = $db->Personnel;
	$collectionPersonnel->update(array("_id"=> new mongoID($_POST['id'])), array('$set'=>array('email'=>$_POST['email'])));
	header('location: index.php');
?>