<?php
//include_once('../app/model/accueil/index.php');
include_once('../app/model/menu/menu.php');
include_once('../app/model/register_pro/insert_users.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}

if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}




	include_once('../app/view/summary/thanks.php'); 
?>

