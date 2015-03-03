<?php
include_once('../app/model/account/update_user.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}
$details = afficher_user($_SESSION['id_user']);
$favoris = afficher_favoris($_SESSION['id_user']);
$abo = afficher_abonnement($_SESSION['id_user']);
//$produit = afficher_produits_commande();
$commande = afficher_commande($_SESSION['id_user']);
$y=0;
foreach ($commande as $key => $row) {
	$produit[$y] = afficher_produits_commande($row['lc_id']);
	$count = count($produit[$y]);
	
$y++;
}
//var_dump($produit);

if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}

	if(isset($_POST['nom']))
	{
		if($_POST['password'] == $details[0]['lu_password'])
	{
		$password = $details[0]['lu_password'];

	}
	else
	{
		$password = md5($_POST['password']);

	}
		$update_user = update_user($_POST['nom'], $_POST['prenom'], $_POST['gender'], $_POST['tel'], $_POST['mail'], $password, $_SESSION['id_user']);

		if($update_user = true)
		{
		 header('location:index.php?module=account&action=account&success_modif=1');
		}
	}





if(isset($_POST['newsletter']))
{	
	if(empty($abo))
	{	
		$add = add_abonnement($_POST['newsletter'], $_POST['news'], $_POST['text_message'], $_SESSION['id_user']);
		if($add = true)
		{
			header('location:index.php?module=account&action=account&success_abo=1');
		}
	}
	if(!empty($abo))
	{
				
		$add = update_abonnement($_POST['newsletter'], $_POST['news'], $_POST['text_message'], $_SESSION['id_user']);
		if($add = true)
		{
			header('location:index.php?module=account&action=account&success_abo=1');
		}

	}
}
	
	
	

	include_once('../app/view/account/account.php'); 
?>

