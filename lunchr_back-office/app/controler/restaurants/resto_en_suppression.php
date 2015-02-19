<?php
include('../app/model/restaurants/afficher_resto_en_suppression.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_resto_en_suppression = afficher_resto_en_suppression();

include('../app/view/restaurants/resto_en_suppression.php'); 
?>