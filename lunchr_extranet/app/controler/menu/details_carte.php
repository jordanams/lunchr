<?php
include('../app/model/menu/details_carte.php');
 
	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_GET['id_carte'])) {
		$verif_details = verif_details($_GET['id_carte']);
	}

include('../app/view/menu/details_carte.php'); 
?>