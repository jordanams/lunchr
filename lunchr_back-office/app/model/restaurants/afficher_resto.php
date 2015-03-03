<?php
function afficher_resto() {
	
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT *
  												FROM lunchr_restaurants
  												WHERE lr_actif_valid = 2");
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