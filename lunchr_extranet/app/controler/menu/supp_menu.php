<?php

	if(isset($_GET['id_menu'])) {
		
		include('../app/model/menu/supp_menu.php');
		$delete = supp_menu($_GET['id_menu']);

		if($delete = true) {
			supp_menu($_GET['id_menu']);

			if(isset($_GET['menu_detail'])) {
				header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'&supp_menu=1');
			}
			else {
				header('location:index.php?module=menu&action=liste_menu&supp_menu=1');
			}
		}
	}

include('../app/view/menu/liste_menu.php'); 
?>