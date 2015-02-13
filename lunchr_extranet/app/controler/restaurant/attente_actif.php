<?php
include('../app/model/restaurant/select_resto.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$select_resto = select_resto($_SESSION['user_id']);

include('../app/view/restaurant/attente_actif.php'); 
?>