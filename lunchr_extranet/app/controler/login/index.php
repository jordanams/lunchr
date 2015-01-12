<?php
include('../app/model/login/index.php');

	if(isset($_GET['login'])) {
		$verif_login = verif_user($_GET['login'], md5($_GET['password']));
	}
	
	if(isset($_GET['remember']))
	{
		if(!setcookie("Lunchr_Login",$_GET["login"],time()+3600*24*31)) {
			die("cookie ne peut etre enregistré !");
		}
	}
	
	if(isset($_SESSION['login']))
	{
		header('location:index.php?module=accueil&action=index&login_success=1');
	}

include('../app/view/login/index.php'); 
?>