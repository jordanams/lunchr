<?php
function gestion_suggestion() {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT 	*
  													FROM lunchr_restaurants as lr, lunchr_suggestion as ls
  													WHERE lr.lr_id = ls.lr_id
  													ORDER BY ls.ls_id");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			$resultat = $select -> fetchAll();
			return $resultat;

			}
	
	catch ( Exception $e ) {
	return false;
	}
}
?>