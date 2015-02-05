<?php

function activer_produit_actif ($id_produit) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_produits
	  						  SET lp_actif = '1' 
	  						WHERE lp_id = :id_produit");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_produit', $id_produit, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}


function activer_produit_null ($id_produit) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_produits
	  						  SET lp_actif = '0' 
	  						WHERE lp_id = :id_produit");

				$curseur = $connexion->prepare($query); 
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