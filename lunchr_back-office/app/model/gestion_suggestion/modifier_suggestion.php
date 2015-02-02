<?php
function modifier_suggestion() {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT 	*
  													FROM lunchr_restaurants");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			$resultat = $select -> fetchAll();
			return $resultat;

			}
	
	catch ( Exception $e ) {
	return false;
	}
}


function modifier_suggestion_update($resto_suggestion, $id_resto) {
	
		global $connexion;
		try {
	  			$query = ("	UPDATE lunchr_suggestion 
	  						SET
	  						lr_id = :resto_suggestion
	  						WHERE ls_id = :id_resto");
				$curseur = $connexion->prepare($query);
				$curseur->bindValue(':resto_suggestion', $resto_suggestion, PDO::PARAM_STR);
				$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
		}
?>