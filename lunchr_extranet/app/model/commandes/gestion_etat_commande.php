<?php

function valider_commande($id_commande) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_commandes
	  						  SET lc_statut = '1' 
	  						WHERE lc_id = :id_commande");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_commande', $id_commande, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}

function terminer_commande($id_commande) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_commandes
	  						  SET lc_statut = '2' 
	  						WHERE lc_id = :id_commande");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_commande', $id_commande, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}

function annuler_commande($id_commande) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_commandes
	  						  SET lc_statut = '3' 
	  						WHERE lc_id = :id_commande");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_commande', $id_commande, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}
?>