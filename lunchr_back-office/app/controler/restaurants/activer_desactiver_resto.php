<?php
include('../app/model/restaurants/afficher_resto_na.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


	if(isset($_GET['id_activer_resto'])) {
		include('../app/model/restaurants/activer_desactiver_resto.php');
		$activer_resto = activer_resto($_GET['id_activer_resto']);
		header('location:index.php?module=restaurants&action=index');
	}

	if(isset($_GET['id_desactiver_resto'])) {
		include('../app/model/restaurants/activer_desactiver_resto.php');
		$desactiver_resto = desactiver_resto($_GET['id_desactiver_resto']);
		header('location:index.php?module=restaurants&action=activer_desactiver_resto');
	}


$afficher_resto_attente = afficher_resto_attente();
include('../app/view/restaurants/resto_en_attente.php'); 
?>