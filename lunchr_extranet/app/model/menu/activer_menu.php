<?php

function activer_menu_actif ($id_menu) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_menu
	  						  SET lm_actif = '1' 
	  						WHERE lm_id = :id_menu");

				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':id_menu', $id_menu, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}


function activer_menu_null ($id_menu) {

	global $connexion;
		try {
	  			$query = ("UPDATE lunchr_menu
	  						  SET lm_actif = '0' 
	  						WHERE lm_id = :id_menu");

				$curseur = $connexion->prepare($query); 
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