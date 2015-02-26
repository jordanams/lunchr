<?php
include('../app/model/utilisateurs/supp_users.php');

	if(isset($_GET['id'])) {

		if($_GET['type'] == "pro") {
			$delete = supp_users_pro($_GET['id']);
			if($delete = true) {
				header('location:index.php?module=utilisateurs&action=index&supp_users_pro=1');
			}
		}

		if($_GET['type'] == "normal") {
			$delete = supp_users($_GET['id']);
			if($delete = true) {
				header('location:index.php?module=utilisateurs&action=afficher_users&supp_users=1');
			}
		}
	}

include('../app/view/utilisateurs/index.php'); 
?>