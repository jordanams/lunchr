<?php
include('../app/model/menu/afficher_produit.php');

$afficher_produit = afficher_produit();

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

include('../app/view/menu/liste_produit.php'); 
?>