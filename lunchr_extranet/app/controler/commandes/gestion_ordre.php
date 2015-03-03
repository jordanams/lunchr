<?php
include('../app/model/commandes/afficher_commande.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
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

	if (isset($_GET['ordre_nb_personne'])) {
		if ($_GET['ordre_nb_personne'] == 'nb_personne_asc') {
		    $ordre = "lc.lc_nombre_personnes ASC";
		}
		elseif ($_GET['ordre_nb_personne'] == 'nb_personne_desc') {
		    $ordre = "lc.lc_nombre_personnes DESC";
		}
	}


$afficher_commande = afficher_commande($_SESSION['id_resto'], $ordre);
$y=0;
	foreach ($afficher_commande as $key => $row) {
		$produit[$y] = afficher_produits_commande($row['lc_id']);
		$count = count($produit[$y]);
		$y++;
	}

$afficher_commande_futur = afficher_commande_futur($_SESSION['id_resto'], $ordre);
$y=0;
	foreach ($afficher_commande_futur as $key => $row) {
		$produit[$y] = afficher_produits_commande($row['lc_id']);
		$count = count($produit[$y]);
		$y++;
	}

$afficher_commande_valide = afficher_commande_valide($_SESSION['id_resto'], $ordre);
$y=0;
	foreach ($afficher_commande_valide as $key => $row) {
		$produit[$y] = afficher_produits_commande($row['lc_id']);
		$count = count($produit[$y]);
		$y++;
	}

if (isset($_GET['ordre_index'])) {
	include('../app/view/commandes/index.php');
}
if (isset($_GET['ordre_futur'])) {
	include('../app/view/commandes/cmd_futur.php');
}
if (isset($_GET['ordre_valider'])) {
	include('../app/view/commandes/cmd_valider.php');
}

?>