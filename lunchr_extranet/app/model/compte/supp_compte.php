<?php

function supp_compte($id_user) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_users_pro
	  						  SET lup_actif = '0',
	  						  	  lup_supp_attente = '1'
	  						WHERE lup_id = :id_user");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_user', $id_user, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}

function supp_compte_resto($id_user) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_restaurants
	  						  SET lr_actif_attente = '0',
	  						  	  lr_actif_valid = '0',
	  						  	  lr_supp_attente = '1' 
	  						WHERE lup_id = :id_user");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_user', $id_user, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}
?>