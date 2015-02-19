<?php

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

include('../app/view/restaurant/attente_supp.php'); 
?>