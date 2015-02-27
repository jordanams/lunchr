<?php
function afficher_quantites($id_resto, $ordre) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_restaurants as lr, lunchr_carte as lc, lunchr_menu as lm, lunchr_produits as lp
											 WHERE lr.lr_id = lc.lr_id and lc.lce_id = lm.lce_id and lm.lm_id = lp.lm_id and lr.lr_id = :id_resto
											 ORDER BY {$ordre}");
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