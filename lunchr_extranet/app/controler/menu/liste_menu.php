<?php
include('../app/model/menu/afficher_menu.php');

$afficher_menu = afficher_menu();

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


include('../app/view/menu/liste_menu.php'); 
?>