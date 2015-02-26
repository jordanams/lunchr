<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/mise_en_forme.php');
include('../app/model/menu/details_carte.php');
include('../app/model/quantites-produits/ajouter_quantites_produits.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_POST['nbr_produit'])) {
		$verif_menu = verif_menu($_SESSION['id_carte_quantites']);
		$insert = ajouter_quantites_produits($_POST['nbr_produit'], 
											 $_POST['id_produit']);
			if($insert = true) {
			header('Location:index.php?module=quantites-produits&action=ajouter_quantites&id_menu='.$verif_menu[0]['lm_id'].'&id_carte='.$verif_menu[0]['lce_id'].'');
		}
	}
	

$_SESSION['id_carte_quantites'] = $_GET['id_carte'];

$verif_menu = verif_menu($_SESSION['id_carte_quantites']);
$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
$afficher_carte_select = afficher_carte_select($_SESSION['id_resto'], $_SESSION['id_carte_quantites']);
$liste_quantites_produits = liste_quantites_produits($_GET['id_menu']);
include('../app/view/quantites-produits/ajouter_quantites.php'); 
?>