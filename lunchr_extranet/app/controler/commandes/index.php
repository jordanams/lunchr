<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if (!isset($_GET['ordre_heure'])) {
	    $ordre = "lc.lc_heure_dish ASC";
	}

$afficher_commande = afficher_commande($_SESSION['id_resto'], $ordre);
include('../app/view/commandes/index.php'); 
?>