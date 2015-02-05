<?php

	if(isset($_GET['id_produit'])) {
		
		include('../app/model/menu/supp_produit.php');
		$delete = supp_produit($_GET['id_produit']);

		if($delete = true) {
			supp_produit($_GET['id_produit']);
			header('location:index.php?module=menu&action=liste_produit&supp_produit=1');
		}
	}

include('../app/view/menu/liste_menu.php'); 
?>