<?php

//******************************************************//
// --------------- PAGE POLYMORPHE ---------------------//
	include_once('../app/config/secu_session.php');
	include_once('../app/config/connect.php');
	my_session_start ();
	
	//if(isset($_SESSION["login_compte"]))
	//{
		// dispatching des modules
		if (isset($_GET['module']))
		{
			$module = $_GET['module'];
		}
		else
		{
			// module par défaut
			$module = "login";
		}

		// dispatching des actions
		if (isset($_GET['action']))
		{
			$action = $_GET['action'];
		}
		else
		{
			// action par défaut
			$action = "index";
		}

		// construction de l'url
		$url = "../app/controler/" . $module . "/" . $action . ".php";

		// dispatching vers les controlers/action ou bien redirection 404
		if (file_exists($url))
		{
			include_once($url);
		}
		else
		{
			include_once('../app/view/404.php');
		}
	//}

	//else
	//{
		//include_once('vue/404.php');
	//}
