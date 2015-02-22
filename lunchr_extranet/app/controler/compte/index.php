<?php
include('../app/model/compte/details_user.php');
include('../app/model/compte/update_user.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	
	if(isset($_POST['nom_user'])) {

		$verif_details = verif_details($_SESSION['user_id']);
		
		if ($_POST['new_mdp_user'] != "") { 
			$mdp_user = md5($_POST['new_mdp_user']); 
		}
		else { 
			$mdp_user = $verif_details[0]['lup_password']; 
		}


		$update = update_user(  $_POST['nom_user'], 
								$_POST['prenom_user'],
								$_POST['phone_user'],
								$_POST['mail_user'],
								$mdp_user, 
								$_SESSION['user_id']);
		if($update = true) {
			header('Location:index.php?module=compte&action=index&update_user=1');
		}
	}

$verif_details = verif_details($_SESSION['user_id']);
include('../app/view/compte/index.php'); 
?>