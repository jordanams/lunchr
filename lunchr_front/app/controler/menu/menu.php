<?php
include_once('../app/model/menu/menu.php');
include_once('../app/config/secu_session.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}

$_SESSION['restaurant'] = $_GET['id'];
$details = detail_restaurant($_GET['id']); 
	
$carte = select_carte($_GET['id']);
$_SESSION['carte'] = $carte[0]['lce_id'];
//echo "id de la carte :".$_SESSION['carte']."";

$menu = select_menu($_SESSION['carte']);
$count_menu = count($menu);
$y=0;
foreach ($menu as $key => $row) {
$produits[$y] = select_produits($_SESSION['carte'], $row['lm_id']);
/*
foreach ($menu[$y] as $key => $row) {
array_push($menu, $produits[$y]);
$y++;
}
*/
//var_dump($produits[$y]);
$y++;
}
if(isset($_SESSION['id_user']))
{
$favoris = select_favoris($_SESSION['id_user'], $_GET['id']);
}


/*
if(isset($_GET['add_favorite']))
{
	if($_GET['add_favorite'] == 1)
	{
		add_favorite($_SESSION['id_user'], $_GET['id']);
		header('refresh:index.php?module=menu&action=menu&id='.$_GET['id'].'&add_favorite=1');
	}
}

if(isset($_GET['del_favorite']))
{
	if($_GET['del_favorite'] == 1)
	{
		del_favorite($_GET['id'], $_SESSION['id_user']);
		header('refresh:index.php?module=menu&action=menu&id='.$_GET['id'].'&del_favorite=1');
	}
}
*/


if(isset($_POST['search']))
	{
		header('location:index.php?module=resultat&action=resultat&search='.$_POST['search'].'');
	}
$day = strftime("%A");
$horraire= select_horraire($_GET['id'], $day);
$heure = select_horraire_heure($_GET['id'], $day);
//var_dump($horraire);
$datetime = date("H:i:s");


if(($horraire[0]['lh_open_day']<$datetime) && ($datetime<$horraire[0]['lh_close_day']))
{

}
else
{
	//echo "<h1>FERME</h1>";
}


/*
if(isset($_POST['product']))
{
$_SESSION['panier'] = array();


foreach ($_POST['product'] as $key => $row)
	{
	$_SESSION['panier'][$key] = $_POST['product'][$key]; 
	}
	$_SESSION['restaurant'] = $_GET['id'];
	header('location:index.php?module=summary&action=summary');
}
*/

$_SESSION['panier'] = array(); 

if(isset($_POST['product']))
{
my_session_start ();
	foreach ($_POST['product'] as $key => $row)
	{
	$verif_quantity = verif_quantity($key);
	if($verif_quantity[0]['lp_quantites'] < $_POST['product'][$key])
	{	
		header('location:index.php?module=menu&action=menu&id='.$_SESSION['restaurant'].'&nom_produit='.$verif_quantity[0]['lp_nom'].'&max_quantity='.$verif_quantity[0]['lp_quantites'].'');
		die();
		
	}

	$_SESSION['panier'][$key] = $_POST['product'][$key];
	}

	header('location:index.php?module=summary&action=summary');

}




include_once('../app/view/menu/menu.php'); 
?>
