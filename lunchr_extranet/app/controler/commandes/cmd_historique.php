<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if (!isset($_GET['ordre_date'])) {
	    $ordre = "lc.lc_date_dish ASC";
	}

$afficher_commande_historique = afficher_commande_historique($_SESSION['id_resto'], $ordre);
include('../app/view/commandes/cmd_historique.php'); 
?>