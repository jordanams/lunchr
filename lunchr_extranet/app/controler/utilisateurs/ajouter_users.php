<?php

include('../app/model/utilisateurs/insert_users.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

	if(isset($_POST['admin_users'])) {

		if($_POST['admin_users'] == "0") {
			$insert = insert_users(	$_POST['nom_users'], 
									$_POST['prenom_users'], 
									$_POST['phone_users'], 
									$_POST['mail_users'],
									md5($_POST['mdp_users']),
									$_POST['admin_users']);
			if($insert = true) {
				header('Location:index.php?module=utilisateurs&action=afficher_users&insert_users=1');
			}
		}

		else {
			$insert = insert_users_pro(	$_POST['nom_users'], 
										$_POST['prenom_users'], 
										$_POST['phone_users'], 
										$_POST['mail_users'],
										md5($_POST['mdp_users']),
										$_POST['admin_users']);
			if($insert = true) {
				header('Location:index.php?module=utilisateurs&action=index&insert_users_pro=1');
			}
		}
	}

include('../app/view/utilisateurs/ajouter_users.php'); 
?>