<?php
include('../app/model/commandes/afficher_commande.php');
//include('../app/model/commandes/afficher_commande_new.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if (!isset($_GET['ordre_heure'])) {
	    $ordre = "lc.lc_heure_dish ASC";
	}

$afficher_commande = afficher_commande($_SESSION['id_resto'], $ordre);
	$y=0;
	foreach ($afficher_commande as $key => $row) {
		$produit[$y] = afficher_produits_commande($row['lc_id']);
		$count = count($produit[$y]);
		$y++;
	}

include('../app/view/commandes/index.php'); 
?>