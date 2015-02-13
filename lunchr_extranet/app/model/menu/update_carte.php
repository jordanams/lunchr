<?php

function update_carte ($nom_carte, $id_carte) {

		global $connexion;
		try {
	  			$query = (" UPDATE lunchr_carte
	  											SET
												lce_nom = :nom_carte
	  											WHERE lce_id = :id_carte");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nom_carte', $nom_carte, PDO::PARAM_STR);
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