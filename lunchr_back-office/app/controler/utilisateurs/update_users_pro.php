<?php
include('../app/model/utilisateurs/update_users_pro.php');
include('../app/model/utilisateurs/details_users_pro.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$verif_details = verif_details($_GET['id']);
	
	if(isset($_POST['nom_user'])) {

		$update = update_users_pro( $_POST['nom_user'], 
								$_POST['prenom_user'],
								$_POST['phone_user'],
								$_POST['mail_user'],
								md5($_POST['mdp_user']),
								$_POST['admin_user'],
								$_GET['id']);
		if($update = true) {
			header('Location:index.php?module=utilisateurs&action=index&update_users_pro=1');
		}
	}



include('../app/view/utilisateurs/update_users_pro.php'); 
?>