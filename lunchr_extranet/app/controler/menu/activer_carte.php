<?php

	if(isset($_GET['id_carte'])) {
		
		include('../app/model/menu/activer_carte.php');
		$activer_carte_null = activer_carte_null($_SESSION['id_resto']);
		$activer_resto = activer_resto($_SESSION['id_resto']);

		if($activer_carte_null = true) {
			$activer_carte_actif = activer_carte_actif($_SESSION['id_carte']);
			header('location:index.php?module=menu&action=details_carte&id_carte='.$_SESSION['id_carte'].'');
		}
	}

include('../app/view/menu/index.php'); 
?>