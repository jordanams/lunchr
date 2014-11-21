<?php
function afficher_resto() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lr_nom, 
  													lr_adresse, 
  													lr_description, 
  													lr_id 
  													FROM lunchr_restaurants");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_NUM);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}
?>