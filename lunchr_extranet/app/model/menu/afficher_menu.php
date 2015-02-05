<?php
function afficher_menu($id_resto) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_menu as lm, lunchr_carte as lc, lunchr_restaurants as lr
  											 WHERE lr.lr_id = lc.lr_id and lc.lce_id = lm.lce_id and lc.lr_id = lm.lr_id and lm.lr_id = :id_resto");
			$select -> execute(array('id_resto'=>$id_resto));
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