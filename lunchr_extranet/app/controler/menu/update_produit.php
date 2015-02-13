<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/update_produit.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_GET['id_produit'])) {
		$verif_produit = verif_produit($_GET['id_produit']);
		$_SESSION['image_produit'] = $verif_produit[0]['lp_image'];

		if($_SESSION['image_produit'] == "") {$avatar1 = "";} 
		else {$avatar1 = $_SESSION['image_produit'];}
	}

	
	if(isset($_POST['nom_produit'])) {

	  	$update = update_produit( 	$_POST['nom_produit'],
	  								$_POST['prix_produit'],
	  								$_POST['desc_produit'],
	  								$avatar1, 
	 								$_GET['id_produit']);
	  	if($update = true) {
	  		header('Location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
	  	}
	}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
include('../app/view/menu/update_produit.php'); 
?>