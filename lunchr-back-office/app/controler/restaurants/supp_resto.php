<?php

	if(isset($_GET['id'])) {
		
		include('../app/model/restaurants/supp_resto.php');
		$delete = supp_notif_resto($_GET['id']);
		$delete2 = supp_horraire_resto($_GET['id']);

		if($delete2 = true) {
			supp_resto($_GET['id']);
			header('location:index.php?module=restaurants&action=index&supp_resto=1');
		}
	}

include('../app/view/restaurants/index.php'); 
?>