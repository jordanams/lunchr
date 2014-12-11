<?php
include('../app/model/utilisateurs/index.php');
include('../app/model/utilisateurs/afficher_users_pro.php');

$afficher_users = afficher_users_pro();

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

include('../app/view/utilisateurs/index.php'); 
?>