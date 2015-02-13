<?php
include_once('../app/model/gestion_suggestion/gestion_suggestion.php');
include_once('../app/model/gestion_suggestion/modifier_suggestion.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$gestion_suggestion = gestion_suggestion();
$modifier_suggestion = modifier_suggestion();
//$modifier_suggestion_update = modifier_suggestion_update();

//print_r($modifier_suggestion);

$i=0;
	if(isset($_POST['resto_suggestion'.$i])) {
		
		while($i<8)
		{
		$update = modifier_suggestion_update($_POST['resto_suggestion'.$i], 
										 $i);
		echo $_POST['resto_suggestion'.$i];
		$i++;
		}


		if($update = true) {
			header('Location:index.php?module=gestion_suggestion&action=index&update_suggest=1');
		}
	}


include_once('../app/view/gestion_suggestion/modifier_suggestion.php'); 
?>