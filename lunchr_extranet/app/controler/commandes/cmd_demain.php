<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_commande_demain = afficher_commande_demain($_SESSION['id_resto']);
include('../app/view/commandes/cmd_demain.php'); 
?>