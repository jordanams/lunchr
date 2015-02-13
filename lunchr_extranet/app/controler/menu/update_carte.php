<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/details_carte.php');
include('../app/model/menu/update_carte.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	
	if(isset($_POST['nom_carte'])) {

	 	$update = update_carte( $_POST['nom_carte'], 
								$_GET['id_carte']);
	 	if($update = true) {
	 		header('Location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	 	}
	 }

$verif_carte = verif_carte($_GET['id_carte']);
$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
include('../app/view/menu/update_carte.php'); 
?>