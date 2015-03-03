<?php
include_once('../app/model/account/update_user.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}

	if(isset($_GET['id_resto']))
	{
		if($_GET['delete'] == 1)
		{
			$_SESSION['sup_fav_resto'] = $_GET['id_resto'];
			$delete = del_favorite($_SESSION['sup_fav_resto'], $_SESSION['id_user']);
			
			if($delete = true)
			{
				header('location:index.php?module=account&action=account&delete=1');
			}
		}
	}
	include_once('../app/view/account/account.php'); 
?>

