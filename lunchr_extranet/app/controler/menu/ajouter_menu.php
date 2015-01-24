<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/ajouter_menu.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_carte = afficher_carte();
$afficher_resto = afficher_resto();

	if(isset($_POST['nom_menu'])) {

		$insert = ajouter_menu($_POST['nom_resto'], $_POST['nom_carte'], $_POST['nom_menu']);
	
		if($insert = true) {
			header('Location:index.php?module=menu&action=liste_menu&insert_menu=1');
		}
	}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);

include('../app/view/menu/ajouter_menu.php'); 
?>