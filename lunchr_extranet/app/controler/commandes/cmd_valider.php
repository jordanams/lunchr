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

$afficher_commande_valide = afficher_commande_valide($_SESSION['id_resto'], $ordre);
	$y=0;
	foreach ($afficher_commande_valide as $key => $row) {
		$produit[$y] = afficher_produits_commande($row['lc_id']);
		$count = count($produit[$y]);
		$y++;
	}


//$afficher_commande_valide = afficher_commande_valide($_SESSION['id_resto'], $ordre);
include('../app/view/commandes/cmd_valider.php'); 
?>