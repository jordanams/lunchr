<?php

	if(isset($_GET['id_carte'])) {
		
		include('../app/model/restaurants/supp_resto.php');
		$delete = supp_notif_resto($_GET['id_carte']);
		$delete2 = supp_horraire_resto($_GET['id_carte']);

		if($delete2 = true) {
			supp_resto($_GET['id_carte']);

			if(isset($_GET['id_resto_index'])) {
				header('location:index.php?module=restaurants&action=index&supp_resto=1');
			}
			if(isset($_GET['id_resto_actif'])) {
				header('location:index.php?module=restaurants&action=activer_desactiver_resto&supp_resto=1');
			}
			if(isset($_GET['id_resto_non_actif'])) {
				header('location:index.php?module=restaurants&action=resto_non_actif&supp_resto=1');
			}
			if(isset($_GET['id_resto_supp'])) {
				header('location:index.php?module=restaurants&action=resto_en_suppression&supp_resto=1');
			}
		}
	}

include('../app/view/restaurants/index.php'); 
?>