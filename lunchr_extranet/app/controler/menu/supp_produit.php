<?php

	if(isset($_GET['id_produit'])) {
		
		include('../app/model/menu/supp_produit.php');
		$delete = supp_produit($_GET['id_produit']);

		if($delete = true) {
			supp_produit($_GET['id_produit']);

			if(isset($_GET['produit_detail'])) {
				header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'&supp_produit=1');
			}
			else {
				header('location:index.php?module=menu&action=liste_produit&supp_menu=1');
			}
		}
	}

include('../app/view/menu/liste_produit.php'); 
?>