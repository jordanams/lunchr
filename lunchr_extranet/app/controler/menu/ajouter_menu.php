<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/afficher_carte.php');
include('../app/model/menu/ajouter_menu.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_POST['id_carte'])) {

		$count_menu = count_menu($_POST['id_carte']);
		//echo $count_menu[0]['COUNT(lm_id)'];
		//die();
		
		if($count_menu[0]['COUNT(lm_id)'] == 8) {
			header('Location:index.php?module=menu&action=ajouter_menu&stop_menu=1');
		}

		else {
			$insert = ajouter_menu($_SESSION['id_resto'], $_POST['id_carte'], $_POST['nom_menu'], $count_menu[0]['COUNT(lm_id)']);
			if($insert = true) {
				header('Location:index.php?module=menu&action=liste_menu&insert_menu=1');
			}
		}
	}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
$afficher_carte = afficher_carte($_SESSION['user_id'], $_SESSION['id_resto']);

include('../app/view/menu/ajouter_menu.php'); 
?>