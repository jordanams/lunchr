<?php

function activer_resto ($id_resto) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_restaurants
	  						  SET lr_actif_valid = '1', lr_actif_attente = '0' 
	  						WHERE lr_id = :id_resto");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}



function desactiver_resto ($id_resto) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_restaurants
	  						  SET lr_actif_valid = '0', lr_actif_attente = '1' 
	  						WHERE lr_id = :id_resto");

				$curseur = $connexion->prepare($query); 
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