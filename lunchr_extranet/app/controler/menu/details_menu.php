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
		$_SESSION['restaurants_image_1'] = $verif_details[0]['lr_image_1'];
		$_SESSION['restaurants_image_2'] = $verif_details[0]['lr_image_2'];
		$_SESSION['restaurants_image_3'] = $verif_details[0]['lr_image_3'];
		$_SESSION['restaurants_image_4'] = $verif_details[0]['lr_image_4'];
	}
include('../app/view/restaurants/details_resto.php'); 
?>