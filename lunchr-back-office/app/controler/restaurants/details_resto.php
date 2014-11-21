<?php
include('../app/model/restaurants/details_resto.php');
 
	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_GET['id'])) {
		$verif_details = verif_details($_GET['id']);
	}
include('../app/view/restaurants/details_resto.php'); 
?>