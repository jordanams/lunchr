<?php
include('../app/model/login/index.php');

	if(isset($_GET['login'])) {
		$verif_login = verif_user($_GET['login'], md5($_GET['password']));
	}
	
	if(isset($_SESSION['login']))
	{
		header('location:index.php?module=accueil&action=index&login_success=1');
	}

/*
	if(isset($_GET['deco'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=accueil&action=index&logout=1');
		exit;
	}
*/

include('../app/view/login/index.php'); 
?>