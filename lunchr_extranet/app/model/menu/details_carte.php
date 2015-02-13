<?php
function verif_carte($id_carte) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * 
                                     FROM lunchr_restaurants as lr, lunchr_carte as lc
                                     WHERE lr.lr_id = lc.lr_id 
                                     and lc.lce_id = :id_carte");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_carte"=>$id_carte));
			$resultat = $select -> fetchAll();
			return $resultat;
			}
	
	catch ( Exception $e ) {
	return false;
	}
}

function verif_menu($id_carte) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * 
                                     FROM lunchr_restaurants as lr, lunchr_carte as lc, lunchr_menu as lm
                                     WHERE lr.lr_id = lc.lr_id 
                                     and lc.lce_id = lm.lce_id
                                     and lm.lce_id = :id_carte");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_carte"=>$id_carte));
			$resultat = $select -> fetchAll();
			return $resultat;
			}
	
	catch ( Exception $e ) {
	return false;
	}
}

function verif_produit($id_carte) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * 
                                     FROM lunchr_restaurants as lr, lunchr_carte as lc, lunchr_menu as lm, lunchr_produits as lp
                                     WHERE lr.lr_id = lc.lr_id 
                                     and lc.lce_id = lm.lce_id
                                     and lm.lm_id = lp.lm_id
                                     and lm.lce_id = :id_carte");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_carte"=>$id_carte));
			$resultat = $select -> fetchAll();
			return $resultat;
			}
	
	catch ( Exception $e ) {
	return false;
	}
}
?>