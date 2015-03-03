<?php
		session_start();
		include ("connect_sql.php");
		include ("users_bd.php");
		
		$query = "select * from tv_users where USE_USERNAME= '$_GET[login]'";
		$q = mysql_query($query);
	if($q)
	{
	while ($row = mysql_fetch_array($q))
	{
		$_SESSION['LOGIN'] = "".$row['USE_USERNAME']."";
		$_SESSION['TYPE'] = "".$row['USE_TYPE']."";
		$_SESSION['ID_USER'] = "".$row['USE_ID']."";
	}
	}
		
	
		if (is_user($_GET["login"],md5($_GET["password"])))
			{
				$_SESSION['LOG'] = $_GET["login"];
				$_SESSION['PASSWORD'] = $_GET["password"];

			
				if(isset($_GET['check'])){
					{
				if(!setcookie("Login",$_GET["login"],time()+3600*24*31))
						{
							die("cookie ne peut etre enregistré !");
						}
						if(!setcookie("Password",$_GET["password"],time()+3600*24*31))
						{
							die("cookie ne peut etre enregistré !");
						}
			
					}
				}
				header("location:page_index.php");
			}
		else
			{
				header("location:index.php?message=Erreur");
			}
?>