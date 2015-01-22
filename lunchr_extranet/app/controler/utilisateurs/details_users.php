<?php
include('../app/model/utilisateurs/details_users.php'); 

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_GET['id'])) {
		$verif_details = verif_details($_GET['id']);
	}
include('../app/view/utilisateurs/details_users.php'); 
?>