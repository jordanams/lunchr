<?php
//include_once('../app/model/accueil/index.php');
include_once('../app/model/menu/menu.php');

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
	'METHOD' => 'GetExpressCheckoutDetails',
	'VERSION' => '74.0',
	'USER' => $user,
	'TOKEN' => $_GET['token'],
	'SIGNATURE' => $signature,
	'PWD' => $password

);

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
//var_dump($responseArray);
//die("https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=".$responseArray['TOKEN']."");

$user = 'jordan.amsalem_api1.etudiant-eemi.com';
$password = 'XGUUFD53D233YZFG';
$signature = 'ASusZHAajADAc66VIWJKxxM3hTa3ALgCgUxqucQy5JAj6uWNMnPcELHz';
$params = array(
	'METHOD' => 'DoExpressCheckoutPayment',
	'VERSION' => '74.0',
	'USER' => $user,
	'TOKEN' => $_GET['token'],
	'SIGNATURE' => $signature,
	'PWD' => $password,
	'PAYERID' => $_GET['PayerID'],
	'PAYMENTACTION' => 'Sale',
	'PAYMENTREQUEST_0_AMT' => $totalttc,
	'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR'


);

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

		var_dump($responseArray);
		$statut = "Payé";
		$type_paiment = "Carte bleu"
		$generate_commande = add_commandes($_SESSION['id_user'], $_SESSION['restaurant'], $responseArray['PAYMENTINFO_0_ORDERTIME'], $statut, $type_paiment, $commentaire, $transactionid, $date_dish, $heure_dish, $nombre_personnes);
		if($generate_commande = true)
		{
			$id_commande = $connexion->lastInsertId();
			var_dump($panier);
			
			foreach($panier as $k => $products) {
				//$generate_commande2 = add_ligne_commandes($id_commande, $panier[$k][0]['lp_id'], $_SESSION['restaurant'], $products[1]);
				echo $panier[$k][0]['lp_id'];
				die();
	//var_dump($params);
		}
			if($generate_commande2 = true)
			{
				echo"Paiement effectué avec succès";
				die();
			}

		}
		//var_dump($params);

	}
	else
	{
		print_r($responseArray);
		die();
	}

	curl_close($curl);
}


?>

