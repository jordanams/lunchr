<?php
include('../app/model/menu/afficher_carte.php');

$afficher_carte = afficher_carte();

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


include('../app/view/menu/index.php'); 
?>