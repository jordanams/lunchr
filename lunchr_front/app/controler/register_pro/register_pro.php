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
$verifmail = select_mail($_POST['email_user']);
if($verifmail[0]['COUNT(lup_mail)'] == 1)
	{
		header('location:index.php?module=register_pro&action=register_pro&mail_exist=1');
	}
	else
	{
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
								$_SESSION['id_user_pro'],
								$_POST['cuisine_resto'],
								$_POST['from_resto']);
			}
			
			if($insert_resto = true) {
				$last_id = $connexion->lastInsertId();
				$_SESSION['id_resto'] = $last_id;
				$notif_insert = insert_notif($_SESSION['id_resto'],2);
				
			}
					if($notif_insert = true)
					{
							
								//envoie de mail//
								//---------DECLARER LES VARIABLE----------//
						$email_expediteur='contact@lunchr.me';
						$email_reply='contact@lunchr.me';
						$message_texte='Confirmation de votre inscription';

						$destinataire=$_POST['email_user'];
						$sujet='Confirmation de création de compte Lunchr';
						$message_html='<html>
						<head>
						<title>Confirmation de création de compte Lunchr</title>
						</head>
						<body>
						
						<br />
						Bonjour <b>'.$_POST['nom_user'].' '.$_POST['prenom_user'].'</b> !
						
						<br />
						<br />
						<br />
						
						Bienvenue sur Lunchr ! 
						
						<br />
						Vous pouvez désormais vous connecter sur votre extranet avec vos identifiants pour administrer votre restaurant.
						<a href="http://ns366377.ovh.net/amsalem/perso/lunchr/prod/lunchr_extranet/public">Cliquez ici !</a>
						
						<br />
						
						
						<br />
						<br />
						
						
						
						<br />
						<br />
						---------------
						<br />
						Ceci est un mail automatique, Merci de ne pas y répondre.
						</body>
						</html>
						';
						
						//---------GENERER LA FRONTIERE ENTRE TEXTE HTML PIECE JOINTE---------------//
						
						$frontiere = md5(uniqid(mt_rand()));
						
						
						//------------------HEDAERS DU MAIL-------------//
						$headers = 'From: "Lunchr" <'.$email_expediteur.'>'."\n";
						$headers .='Return-path: <'.$email_reply.'>'."\n";
						$headers .= 'MIME-Version: 1.0'."\n";
						$headers .= 'Content-type: multipart/mixed; boundary="'.$frontiere.'"';
						
						//---------------MESSAGE TEXTE---------------//
						
						$message = 'this is a multi-part message in MIME format.'."\n\n";
						
						$message .= '--'.$frontiere."\n";
						$message .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n\n";
						$message .= $message_texte."\n\n";
						
						//-------------MESSAGE HTML----------//
						$message .='--' .$frontiere."\n";
						
						$message .='Content-Type: text/html; charset="iso-8859-1"'."\n";
						$message .= $message_html."\n\n";
						//fin envoie de mail//
						if(mail($destinataire,$sujet,$message,$headers))
						{
							header('Location:index.php?module=accueil&action=index&com_success_resto=1');
						}

					}
		}
		}

$cuisine = type_cuisine();
include_once('../app/view/register_pro/register_pro.php'); 
?>
