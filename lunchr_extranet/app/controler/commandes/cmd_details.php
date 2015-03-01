<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_commande_details = afficher_commande_details($_SESSION['id_resto'], $_GET['id_commande']);
include('../app/view/commandes/cmd_details.php'); 
?>