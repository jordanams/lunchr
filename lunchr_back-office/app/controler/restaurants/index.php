<?php
include('../app/model/restaurants/afficher_resto.php');

$afficher_resto = afficher_resto();

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


include('../app/view/restaurants/index.php'); 
?>