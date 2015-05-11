<?php 
	if(empty($_GET['id']))
		header('location: index.php');
	include('connexion.php');
	$collectionPersonnel = $db->Personnel;
	$collectionPersonnel->remove(array('_id' => new MongoId($_GET['id'])));
	header('location: index.php');
?>