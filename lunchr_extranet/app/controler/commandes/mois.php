<?php
//include('../app/model/commandes/mois.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

include('../app/view/commandes/mois.php'); 
?>