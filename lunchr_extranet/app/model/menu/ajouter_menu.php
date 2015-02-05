<?php

	function ajouter_menu ($id_resto, $id_carte, $nom_menu, $ordre) {

	global $connexion;
	try {
		$query = "insert into lunchr_menu (lr_id, lce_id, lm_nom, lm_ordre)
				values (:id_resto, :id_carte ,:nom_menu, :ordre)";
					
		$curseur = $connexion->prepare($query);
		$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
		$curseur->bindValue(':id_carte', $id_carte, PDO::PARAM_STR);
		$curseur->bindValue(':nom_menu', $nom_menu, PDO::PARAM_STR);
		$curseur->bindValue(':ordre', $ordre, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

	function count_menu($id_carte) {

	global $connexion;
	try {
		$select = $connexion -> prepare("SELECT COUNT(lm_id) 
											FROM lunchr_menu as lm, lunchr_carte as lce
  											 WHERE lce.lce_id = lm.lce_id and lce.lce_id = :id_carte");

			$select -> execute(array('id_carte'=>$id_carte));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}


?>