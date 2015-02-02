<?php
include_once('../app/model/accueil/index.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

include_once('../app/view/accueil/index.php'); 
?>