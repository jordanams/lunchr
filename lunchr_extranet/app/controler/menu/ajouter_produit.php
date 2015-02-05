<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/afficher_carte.php');
include('../app/model/menu/afficher_menu.php');
include('../app/model/menu/ajouter_produit.php');


	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

if(!isset($_FILES['ch_file1']))
	{
		$avatar1= "";
	}

		if(isset($_POST['id_menu'])) {

			$insert = ajouter_produit(	$_SESSION['id_resto'],
										$_POST['id_menu'], 
										$_POST['nom_produit'],
										$_POST['prix_produit'], 
										$_POST['desc_produit'], 
										$avatar1);
			if($insert = true) {
				header('Location:index.php?module=menu&action=ajouter_produit&insert_produit=1');
			}
		}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);

include('../app/view/menu/ajouter_produit.php'); 
?>