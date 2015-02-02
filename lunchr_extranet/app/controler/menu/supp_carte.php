<?php

	if(isset($_GET['id_carte'])) {
		
		include('../app/model/menu/supp_carte.php');
		$delete = supp_carte($_GET['id_carte']);

		if($delete = true) {
			supp_carte($_GET['id_carte']);
			header('location:index.php?module=menu&action=index&supp_carte=1');
		}
	}

include('../app/view/menu/index.php'); 
?>