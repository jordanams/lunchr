<?php
include('../app/model/menu/ajouter_produit.php');
include('../app/model/menu/ajouter_menu.php');
include('../app/model/menu/afficher_menu.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_resto = afficher_resto();
$afficher_carte = afficher_carte();
$afficher_menu = afficher_menu();

if(!isset($_FILES['ch_file1']))
	{
		$avatar1= "";
	}

		if(isset($_POST['nom_resto'])) {

			$insert = ajouter_produit(	$_POST['nom_carte'],
										$_POST['nom_resto'],
										$_POST['nom_menu'], 
										$_POST['nom_produit'],
										$_POST['prix_produit'], 
										$_POST['desc_produit'], 
										$avatar1);
			if($insert = true) {
				header('Location:index.php?module=menu&action=liste_produit&insert_produit=1');
			}
		}

include('../app/view/menu/ajouter_produit.php'); 
?>