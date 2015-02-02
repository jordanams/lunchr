<?php
include_once('../app/model/register_pro/insert_resto.php');
include_once('../app/model/register_pro/insert_users.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index');
		exit;
	}

if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}

$user = "1";
if(isset($_POST['nom_user'])) {
		$insert_user_pro = insert_users_pro(	$_POST['nom_user'], 
										$_POST['prenom_user'],
										$_POST['phone_user'], 
										$_POST['email_user'],
										md5($_POST['mdp_user']),
										$_POST['country_user'],
										$user,
										$_POST['gender_user']);


		if($insert_user_pro = true) {
			$last_id = $connexion->lastInsertId();
			$_SESSION['id_user_pro'] = $last_id;
					$insert_resto = insert_resto( $_POST['nom_resto'], 
								$_POST['adresse_resto'],
								$_POST['longitude'],
								$_POST['latitude'],
								$_POST['pays'],
								$_POST['ville'],
								$_POST['code_postal'],
								$_POST['website_resto'],
								$_POST['facebook_resto'], 
								$_POST['tel_resto'],
								$_SESSION['id_user_pro']);
			}
			
			if($insert_resto = true) {
				$last_id = $connexion->lastInsertId();
				$_SESSION['id_resto'] = $last_id;
				$notif_insert = insert_notif($_SESSION['id_resto'],2);
				
			}
					if($notif_insert = true)
					{
						header('Location:index.php?module=accueil&action=index&com_success_resto=1');
					}
		}


include_once('../app/view/register_pro/register_pro.php'); 
?>
