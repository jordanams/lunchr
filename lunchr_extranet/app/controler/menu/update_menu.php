<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/update_menu.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	
	if(isset($_POST['nom_menu'])) {

	 	$update = update_menu ( $_POST['nom_menu'], 
								$_GET['id_menu']);
	 	if($update = true) {
	 		header('Location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	 	}
	 }

$verif_menu = verif_menu($_GET['id_menu']);
$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
include('../app/view/menu/update_menu.php'); 
?>