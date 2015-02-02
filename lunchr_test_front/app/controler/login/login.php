<?php
include_once('../app/model/register_pro/insert_users.php');

$user = "0";
if(isset($_POST['nom_user'])) {
		$insert_user = insert_users(	$_POST['nom_user'], 
										$_POST['prenom_user'],
										$_POST['phone_user'], 
										$_POST['email_user'],
										md5($_POST['mdp_user']),
										$user,
										$_POST['country_user'],
										$_POST['gender_user']);


					if($insert_user = true)
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
						Vous pouvez désormais vous connecter sur notre site afin de commander vos plats dans les meilleurs restaurants !
						<br />
						
						
						<br />
						<br />
						Bon appétit et à très vite sur www.lunchr.me !
						
						
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
		
if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=accueil&action=index');
		exit;
	}

if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}

include_once('../app/view/login/login.php'); 
?>