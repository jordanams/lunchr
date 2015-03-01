<?php

	if(isset($_GET['id_produit_actif'])) {

		include('../app/model/menu/activer_produit.php');
		$activer_produit_actif = activer_produit_actif($_GET['id_produit_actif']);
		header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	}


	if(isset($_GET['id_produit_null'])) {

		include('../app/model/menu/activer_produit.php');
		$activer_produit_null = activer_produit_null($_GET['id_produit_null']);
		header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	}

include('../app/view/menu/index.php'); 
?>