<?php
include('../app/model/restaurants/afficher_resto_na.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_resto_na = afficher_resto_na();

include('../app/view/restaurants/resto_non_actif.php'); 
?>