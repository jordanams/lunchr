<?php
include_once('../app/model/resultat/resultat.php');

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

$search = search($_GET['search']);
//var_dump($search);


include_once('../app/view/resultat/resultat.php');
?>