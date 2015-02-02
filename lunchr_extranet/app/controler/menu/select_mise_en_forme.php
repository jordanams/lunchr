<?php
include('../app/model/menu/afficher_carte.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_carte = afficher_carte($_SESSION['user_id'], $_SESSION['id_resto']);

	if(isset($_POST['id_carte'])) {

		$insert = $_SESSION['id_carte_select'] = $_POST['id_carte'];

		if($insert = true) {
			header('Location:index.php?module=menu&action=mise_en_forme');
		}
	}

include('../app/view/menu/select_mise_en_forme.php'); 
?>