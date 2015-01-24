<?php
function afficher_menu($id_resto) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_menu as lm, lunchr_carte as lc, lunchr_restaurants as lr
  											 WHERE lc.lce_id = lm.lce_id and lr.lr_id =:id_resto ");
			$select -> execute();
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