<?php
include('../app/model/menu/select_resto.php');
include_once('../app/model/accueil/index.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_POST['nom_resto_select'])) {

		$insert = $_SESSION['id_resto'] = $_POST['nom_resto_select'];

		if($insert = true) {
			header('Location:index.php?module=menu&action=index');
		}
	}

$select_resto = select_resto($_SESSION['user_id']);
include_once('../app/view/accueil/index.php'); 
?>