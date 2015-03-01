<?php
include('../app/model/clients/afficher_info_client.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_client = afficher_client($_SESSION['id_resto']);
include('../app/view/clients/index.php'); 
?>