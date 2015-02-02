<?php
include_once('../app/model/menu/menu.php');

if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		setcookie("Login",'',time()-3600);
		header('location:index.php?module=login&action=index');
		exit;
	}

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

include_once('../app/view/menu/menu.php'); 
?>
