<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/ajouter_carte.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_POST['nom_carte'])) {

		$insert = ajouter_carte('65', $_POST['nom_carte']);
		if($insert = true) {
			header('Location:index.php?module=menu&action=index&insert_carte=1');
		}
	}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);

include('../app/view/menu/ajouter_carte.php'); 
?>