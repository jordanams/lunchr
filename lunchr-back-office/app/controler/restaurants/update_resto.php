<?php
include('../app/model/restaurants/update_resto.php');
include('../app/model/restaurants/details_resto.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}
	$verif_details = verif_details($_GET['id']);
	if(isset($_POST['nom_resto'])) {

		$update_resto = update_resto( $_POST['nom_resto'], 
								$_POST['adresse_resto'], 
								$_POST['desc_resto'], 
								$_POST['horraire_resto'],
								$_GET['id']);
	}

include('../app/view/restaurants/update_resto.php'); 
?>