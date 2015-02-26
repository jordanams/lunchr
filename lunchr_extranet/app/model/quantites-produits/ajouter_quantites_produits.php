<?php
function liste_quantites_produits($id_menu) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_restaurants as lr, lunchr_carte as lc, lunchr_menu as lm, lunchr_produits as lp
											 WHERE lr.lr_id = lc.lr_id and lc.lce_id = lm.lce_id and lm.lm_id = lp.lm_id and lm.lm_id = :id_menu");
			$select -> execute(array('id_menu'=>$id_menu));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}

function ajouter_quantites_produits($nbr_produit, $id_produit) {

		global $connexion;
		try {
	  			$query = ("UPDATE lunchr_produits
													SET
													lp_quantites = :nbr_produit
													WHERE lp_id = :id_produit");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nbr_produit', $nbr_produit, PDO::PARAM_STR);
				$curseur->bindValue(':id_produit', $id_produit, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}
?>