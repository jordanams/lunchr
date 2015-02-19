<?php

function afficher_resto_attente() {

		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT *
  												FROM lunchr_restaurants
  												WHERE lr_actif_attente = 1");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}

function afficher_resto_na() {

		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT *
  												FROM lunchr_restaurants
  												WHERE lr_actif_attente = 0 and lr_actif_valid = 0 and lr_supp_attente = 0");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}
?>