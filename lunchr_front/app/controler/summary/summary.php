<?php
//include_once('../app/model/accueil/index.php');
include_once('../app/model/menu/menu.php');
include_once('../app/model/register_pro/insert_users.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}

if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}




$user = "0";
if(isset($_POST['nom_user'])) {
	$verifmail = select_mail($_POST['email_user']);

	if($verifmail[0]['COUNT(lu_mail)'] == 1)
	{
		header('location:index.php?module=summary&action=summary&mail_exist=1');
	}
	else
	{
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
							$_SESSION['id_user'] = $connexion->lastInsertId();
							$_SESSION['login'] = $_POST['email_user'];
							header('Location:index.php?module=summary&action=summary&register=ok');
						}
						}
					}
		}
	
	$day = strftime("%A");
$horraire= select_horraire($_SESSION['restaurant'], $day);
$heure = select_horraire_heure($_SESSION['restaurant'], $day);
//var_dump($horraire);
$datetime = date("H:i:s");
$details = detail_restaurant($_SESSION['restaurant']); 

$count_articles = count($_SESSION['panier']);
$y=0;
foreach ($_SESSION['panier'] as $key => $row) {
$panier[$y] = select_produits_panier($key);
$var = $key;
array_push($panier[$y], $_SESSION['panier'][$key]);
$y++;
} 

$GrandTotal2='';
foreach ($panier as $key => $row) {
		//var_dump($panier);
		
	                       
 $prixTotal = ($panier[$key][0]['lp_prix']*$row[1]);
 $GrandTotal2 += $prixTotal;
                            
                           					
 } 

$totalttc = $GrandTotal2;
$user = 'jordan.amsalem_api1.etudiant-eemi.com';
$password = 'XGUUFD53D233YZFG';
$signature = 'ASusZHAajADAc66VIWJKxxM3hTa3ALgCgUxqucQy5JAj6uWNMnPcELHz';
$params = array(
	'METHOD' => 'SetExpressCheckout',
	'VERSION' => '74.0',
	'USER' => $user,
	'SIGNATURE' => $signature,
	'PWD' => $password,
	'RETURNURL' => 'http://ns366377.ovh.net/amsalem/perso/lunchr/prod/lunchr_front/public/index.php?module=summary&action=process',
	'CANCELURL' => 'http://ns366377.ovh.net/amsalem/perso/lunchr/prod/lunchr_front/public/index.php?module=summary&action=summary',
	'PAYMENTREQUEST_0_AMT' => $totalttc,
	'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
	'PAYMENTREQUEST_0_ITEMAMT' => $totalttc
);
foreach($panier as $k => $products) {
	$params['L_PAYMENTREQUEST_0_NAME'.$k] = $panier[$k][0]['lp_nom'];
	$params['L_PAYMENTREQUEST_0_DESC'.$k] = ''; //DESC 
	$params['L_PAYMENTREQUEST_0_AMT'.$k] = $panier[$k][0]['lp_prix']; //PRICE
	$params['L_PAYMENTREQUEST_0_QTY'.$k] = $products[1]; //QUANTITY
	//var_dump($params);
}
$params = http_build_query($params);
$endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
$curl = curl_init();
curl_setopt_array($curl, array(
			CURLOPT_URL => $endpoint,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => $params,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_VERBOSE => 1
			));
$response = curl_exec($curl);
$responseArray = array();
parse_str($response, $responseArray);
//print_r($responseArray);
if(curl_errno($curl))
{
	print_r(curl_error($curl));
	curl_close($curl);
	die();
}
else
{
	if($responseArray['ACK'] == 'Success')
	{
		//var_dump($responseArray);
		//var_dump($params);

	}
	else
	{
		print_r($responseArray);
		die();
	}

	curl_close($curl);
}
//curl_close($curl);
$paypal = "https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=".$responseArray['TOKEN']."";
if(isset($_POST['date_resa']))
{
	$_SESSION['date_resa'] = $_POST['date_resa'];
	$_SESSION['horraire_resa'] = $_POST['horraire_resa'];
	$_SESSION['personne_resa'] = $_POST['personne_resa'];
	$_SESSION['commentaire_commande'] = $_POST['commentaire_commande'];
/*
	var_dump($_SESSION);
	die();
*/
	header('location:'.$paypal.'');
}
//die("https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=".$responseArray['TOKEN']."");

	include_once('../app/view/summary/summary.php'); 
?>

