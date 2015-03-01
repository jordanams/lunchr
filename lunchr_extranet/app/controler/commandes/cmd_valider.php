<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_commande_valide = afficher_commande_valide($_SESSION['id_resto']);
include('../app/view/commandes/cmd_valider.php'); 
?>