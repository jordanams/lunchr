<?php

	if(isset($_GET['id_menu_actif'])) {

		include('../app/model/menu/activer_menu.php');
		$activer_menu_actif = activer_menu_actif($_GET['id_menu_actif']);
		header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	}



	if(isset($_GET['id_menu_null'])) {

		include('../app/model/menu/activer_menu.php');
		$activer_menu_null = activer_menu_null($_GET['id_menu_null']);
		header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	}




include('../app/view/menu/index.php'); 
?>