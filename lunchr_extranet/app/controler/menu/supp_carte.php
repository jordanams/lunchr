<?php

	if(isset($_GET['id'])) {
		
		include('../app/model/menu/supp_carte.php');
		$delete = supp_carte($_GET['id']);

		if($delete = true) {
			supp_carte($_GET['id']);
			header('location:index.php?module=menu&action=index&supp_carte=1');
		}
	}

include('../app/view/menu/index.php'); 
?>