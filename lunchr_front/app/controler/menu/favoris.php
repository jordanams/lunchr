<?php
include_once('../app/model/menu/menu.php');
include_once('../app/config/secu_session.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}

if(isset($_SESSION['id_user']))
{
$favoris = select_favoris($_SESSION['id_user'], $_GET['id']);
}


if(isset($_GET['add_favorite']))
{
	if($_GET['add_favorite'] == 1)
	{
		add_favorite($_SESSION['id_user'], $_GET['id']);
		header('location:index.php?module=menu&action=menu&id='.$_GET['id'].'&add_favorite=1');
	}
}

if(isset($_GET['del_favorite']))
{
	if($_GET['del_favorite'] == 1)
	{
		del_favorite($_GET['id'], $_SESSION['id_user']);
		header('location:index.php?module=menu&action=menu&id='.$_GET['id'].'&del_favorite=1');
	}
}



include_once('../app/view/menu/menu.php'); 
?>
