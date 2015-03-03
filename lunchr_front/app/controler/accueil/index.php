<?php
include_once('../app/model/accueil/index.php');


if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=accueil&action=index');
		exit;
	}

if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}

	$suggestion = gestion_suggestion();
	//var_dump($suggestion);
	

include_once('../app/view/accueil/index.php'); 
?>