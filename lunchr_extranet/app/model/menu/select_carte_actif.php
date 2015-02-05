<?php
function select_carte_actif($id_resto, $id_carte) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lc.lce_actif, lc.lce_nom 
  											 FROM lunchr_restaurants as lr, lunchr_carte as lc
  											 WHERE lr.lr_id = lc.lr_id and lc.lr_id = :id_resto and lc.lce_id = :id_carte");
  			
			$select -> execute(array('id_resto'=>$id_resto, 'id_carte'=>$id_carte));
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