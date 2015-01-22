<?php
include('../app/model/utilisateurs/update_users.php');
include('../app/model/utilisateurs/details_users.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$verif_details = verif_details($_GET['id']);
	
	if(isset($_POST['nom_user'])) {

		$update = update_users( $_POST['nom_user'], 
								$_POST['prenom_user'],
								$_POST['phone_user'],
								$_POST['mail_user'],
								md5($_POST['mdp_user']),
								$_GET['id']);
		if($update = true) {
			header('Location:index.php?module=utilisateurs&action=afficher_users&update_users=1');
		}
	}



include('../app/view/utilisateurs/update_users.php'); 
?>