<?php
include_once('../app/model/accueil/index.php');


//	if(isset($_GET['login'])) {
//		$verif_login = verif_user($_GET['login'], $_GET['password']);
//	}
//
	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}
	if(!isset($_SESSION['login']))
	{
		header('location:index.php?module=login&action=index&session=expired');
	}

include_once('../app/view/accueil/index.php'); 
?>