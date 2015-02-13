<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/afficher_carte.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


	if(isset($_POST['nom_resto_select'])) {

		$insert = $_SESSION['id_resto'] = $_POST['nom_resto_select'];

		if($insert = true) {
			header('Location:index.php?module=menu&action=index');
		}
	}

if(isset($_SESSION['id_resto'])) {
	$afficher_carte = afficher_carte($_SESSION['user_id'], $_SESSION['id_resto']);
	$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
}

$select_resto = select_resto($_SESSION['user_id']);
include('../app/view/menu/index.php'); 
?>