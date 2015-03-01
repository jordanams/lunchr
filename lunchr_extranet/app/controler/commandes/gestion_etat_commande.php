<?php

	if(isset($_GET['id_commande'])) {
		
		include('../app/model/commandes/gestion_etat_commande.php');
		$valider_commande = valider_commande($_GET['id_commande']);
		
		if ($_GET['page'] == 1) {
			header('location:index.php?module=commandes&action=index&commande_valide');
		}
		elseif ($_GET['page'] == 2) {
			header('location:index.php?module=commandes&action=cmd_demain&commande_valide');
		}
		elseif ($_GET['page'] == 3) {
			header('location:index.php?module=commandes&action=cmd_futur&commande_valide');
		}
	}

	if(isset($_GET['id_commande_termine'])) {
		
		include('../app/model/commandes/gestion_etat_commande.php');
		$terminer_commande = terminer_commande($_GET['id_commande_termine']);
		
		if ($_GET['page'] == 4) {
			header('location:index.php?module=commandes&action=cmd_valider&commande_termine');
		}
	}

	if(isset($_GET['id_commande_annule'])) {
		
		include('../app/model/commandes/gestion_etat_commande.php');
		$annuler_commande = annuler_commande($_GET['id_commande_annule']);
		
		if ($_GET['page'] == 4) {
			header('location:index.php?module=commandes&action=cmd_valider&commande_annule');
		}
	}

?>