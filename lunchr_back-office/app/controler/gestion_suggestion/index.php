<?php
include_once('../app/model/gestion_suggestion/gestion_suggestion.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$gestion_suggestion = gestion_suggestion();

include_once('../app/view/gestion_suggestion/index.php'); 
?>