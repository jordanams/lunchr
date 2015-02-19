<?php

function afficher_resto_en_suppression() {

		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT *
  												FROM lunchr_restaurants
  												WHERE lr_supp_attente = 1");
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