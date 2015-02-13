<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/mise_en_forme.php');


	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


    $i=0;
    if(isset($_POST['id_menu_ordre'.$i])) {

        while($i<8) {
            $update = ajout_mise_en_forme($i, $_POST['id_menu_ordre'.$i]);
            $i++;
        }

        if($update = true) {
            header('Location:index.php?module=menu&action=mise_en_forme&insert_menu_ordre=1');
        }
    }


$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);
$afficher_carte_select = afficher_carte_select($_SESSION['id_resto'], $_SESSION['id_carte_select']);
$afficher_menu = afficher_menu($_SESSION['id_resto'], $_SESSION['id_carte_select']);

include('../app/view/menu/mise_en_forme.php'); 
?>