<?php
function afficher_menu() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_menu as lm, lunchr_carte as lc, lunchr_restaurants as lr
  											 WHERE lc.lr_id = lr.lr_id and lc.lce_id = lm.lce_id");
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