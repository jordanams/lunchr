<?php
include('../app/model/menu/details_carte.php');
include('../app/model/menu/select_carte_actif.php');
 
	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_GET['id_carte'])) {
		$verif_carte = verif_carte($_GET['id_carte']);
		$verif_menu = verif_menu($_GET['id_carte']);
		$verif_produit = verif_produit($_GET['id_carte']);
		$insert = $_SESSION['id_carte'] = $_GET['id_carte'];
	}

$select_carte_actif = select_carte_actif($_SESSION['id_resto'], $_SESSION['id_carte']);

include('../app/view/menu/details_carte.php'); 
?>