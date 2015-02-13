<?php

function verif_menu($id_menu) {

		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * 
                                     FROM lunchr_restaurants as lr, lunchr_carte as lc, lunchr_menu as lm
                                     WHERE lr.lr_id = lc.lr_id 
                                     and lc.lce_id = lm.lce_id
                                     and lm.lm_id = :id_menu");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_menu"=>$id_menu));
			$resultat = $select -> fetchAll();
			return $resultat;
			}
	
	catch ( Exception $e ) {
	return false;
	}
}



function update_menu ($nom_menu, $id_menu) {

		global $connexion;
		try {
	  			$query = (" UPDATE lunchr_menu
	  											SET
												lm_nom = :nom_menu
	  											WHERE lm_id = :id_menu");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nom_menu', $nom_menu, PDO::PARAM_STR);
				$curseur->bindValue(':id_menu', $id_menu, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}
?>