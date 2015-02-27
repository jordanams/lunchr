<?php
include('../app/model/menu/select_resto.php');
include('../app/model/quantites-produits/afficher_quantites.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if (!isset($_GET['ordre'])) {
	    $ordre = "lp.lp_quantites DESC";
	}
	elseif ($_GET['ordre'] == 'nom_produit_asc') {
	    $ordre = "lp.lp_nom ASC";
	}
	elseif ($_GET['ordre'] == 'nom_produit_desc') {
	    $ordre = "lp.lp_nom DESC";
	}
	elseif ($_GET['ordre'] == 'nbr_produit_dispo_asc') {
	    $ordre = "lp.lp_quantites ASC";
	}
	elseif ($_GET['ordre'] == 'nbr_produit_dispo_desc') {
	    $ordre = "lp.lp_quantites DESC";
	}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
$afficher_quantites = afficher_quantites($_SESSION['id_resto'], $ordre);
include('../app/view/quantites-produits/index.php'); 
?>