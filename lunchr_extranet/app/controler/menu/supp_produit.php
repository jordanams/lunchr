<?php

	if(isset($_GET['id'])) {
		
		include('../app/model/menu/supp_produit.php');
		$delete = supp_produit($_GET['id']);

		if($delete = true) {
			supp_produit($_GET['id']);
			header('location:index.php?module=menu&action=liste_produit&supp_produit=1');
		}
	}

include('../app/view/menu/liste_menu.php'); 
?>