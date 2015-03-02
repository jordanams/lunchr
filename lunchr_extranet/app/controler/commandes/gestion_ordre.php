<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if (isset($_GET['ordre_produit'])) {
		if ($_GET['ordre_produit'] == 'nom_produit_asc') {
		    $ordre = "lp.lp_nom ASC";
		}
		elseif ($_GET['ordre_produit'] == 'nom_produit_desc') {
		    $ordre = "lp.lp_nom DESC";
		}
	}

	if (isset($_GET['ordre_heure'])) {
		if ($_GET['ordre_heure'] == 'heure_asc') {
		    $ordre = "lc.lc_heure_dish ASC";
		}
		elseif ($_GET['ordre_heure'] == 'heure_desc') {
		    $ordre = "lc.lc_heure_dish DESC";
		}
	}

	if (isset($_GET['ordre_prix'])) {
		if ($_GET['ordre_prix'] == 'prix_asc') {
		    $ordre = "lc.lc_total ASC";
		}
		elseif ($_GET['ordre_prix'] == 'prix_desc') {
		    $ordre = "lc.lc_total DESC";
		}
	}

	if (isset($_GET['ordre_date'])) {
		if ($_GET['ordre_date'] == 'date_asc') {
		    $ordre = "lc.lc_date_dish ASC";
		}
		elseif ($_GET['ordre_date'] == 'date_desc') {
		    $ordre = "lc.lc_date_dish DESC";
		}
	}

	if (isset($_GET['ordre_commande'])) {
		if ($_GET['ordre_commande'] == 'commande_asc') {
		    $ordre = "lc.lc_id ASC";
		}
		elseif ($_GET['ordre_commande'] == 'commande_desc') {
		    $ordre = "lc.lc_id DESC";
		}
	}

	if (isset($_GET['ordre_nom'])) {
		if ($_GET['ordre_nom'] == 'nom_asc') {
		    $ordre = "lu.lu_nom ASC";
		}
		elseif ($_GET['ordre_nom'] == 'nom_desc') {
		    $ordre = "lu.lu_nom DESC";
		}
	}


$afficher_commande = afficher_commande($_SESSION['id_resto'], $ordre);
$afficher_commande_demain = afficher_commande_demain($_SESSION['id_resto'], $ordre);
$afficher_commande_futur = afficher_commande_futur($_SESSION['id_resto'], $ordre);
$afficher_commande_valide = afficher_commande_valide($_SESSION['id_resto'], $ordre);
$afficher_commande_historique = afficher_commande_historique($_SESSION['id_resto'], $ordre);
$afficher_commande_annule = afficher_commande_annule($_SESSION['id_resto'], $ordre);

if (isset($_GET['ordre_index'])) {
	include('../app/view/commandes/index.php');
}
if (isset($_GET['ordre_demain'])) {
	include('../app/view/commandes/cmd_demain.php');
}
if (isset($_GET['ordre_futur'])) {
	include('../app/view/commandes/cmd_futur.php');
}
if (isset($_GET['ordre_valider'])) {
	include('../app/view/commandes/cmd_valider.php');
}
if (isset($_GET['ordre_historique'])) {
	include('../app/view/commandes/cmd_historique.php');
}
if (isset($_GET['ordre_annule'])) {
	include('../app/view/commandes/cmd_annule.php');
}
?>