<?php
		include_once("../../config/secu_session.php");
		my_session_start();
		$_SESSION['Latitude_USER'] = $_GET['lat'];
        $_SESSION['Longitude_USER'] = $_GET['lng'];
        echo"hello world !!!!!!";
        echo $_SESSION['Latitude_USER'];
        echo $_SESSION['Longitude_USER']
?>