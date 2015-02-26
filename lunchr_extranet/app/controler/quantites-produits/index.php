<?php
include('../app/model/menu/select_resto.php');
include('../app/model/quantites-produits/afficher_quantites.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}
$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
$afficher_quantites = afficher_quantites($_SESSION['id_resto']);
include('../app/view/quantites-produits/index.php'); 
?>