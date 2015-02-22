<?php

	if(isset($_GET['id_user'])) {
		
		include('../app/model/compte/supp_compte.php');
		$delete = supp_compte($_GET['id_user']);

		if($delete = true) {
			$delete2 = supp_compte_resto($_GET['id_user']);
			session_destroy();
			header('Location:index.php?module=login&action=index&supp_user=1');
		}
	}
?>