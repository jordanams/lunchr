<?php
include('../app/model/utilisateurs/afficher_users_supp.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$afficher_users_supp = afficher_users_supp();
include('../app/view/utilisateurs/afficher_users_supp.php'); 
?>