<?php
include('../app/model/restaurant/details_resto.php');
 
	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_GET['id_resto'])) {
		$verif_details = verif_details($_GET['id_resto']);
		$_SESSION['restaurant_image_1'] = $verif_details[0]['lr_image_1'];
		$_SESSION['restaurant_image_2'] = $verif_details[0]['lr_image_2'];
		$_SESSION['restaurant_image_3'] = $verif_details[0]['lr_image_3'];
		$_SESSION['restaurant_image_4'] = $verif_details[0]['lr_image_4'];
	}

include('../app/view/restaurant/details_resto.php'); 
?>