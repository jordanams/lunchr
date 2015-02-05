<?php

function activer_carte_null ($id_resto) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_carte
	  						  SET lce_actif = '0' 
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


function activer_carte_actif ($id_carte) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_carte
	  						  SET lce_actif = '1' 
	  						WHERE lce_id = :id_carte");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_carte', $id_carte, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}

?>