<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


$afficher_commande_demain = afficher_commande_demain($_SESSION['id_resto']);
	$y=0;
	foreach ($afficher_commande_demain as $key => $row) {
		$produit[$y] = afficher_produits_commande($row['lc_id']);
		$count = count($produit[$y]);
		$y++;
	}

include('../app/view/commandes/cmd_demain.php'); 
?>