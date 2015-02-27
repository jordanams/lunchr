<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/afficher_carte.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


$afficher_carte = afficher_carte($_SESSION['user_id'], $_SESSION['id_resto']);
$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
include('../app/view/menu/index.php'); 
?>