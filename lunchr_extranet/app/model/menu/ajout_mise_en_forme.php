<?php
	
function ajout_mise_en_forme($id_menu_ordre, id_menu) {

	global $connexion;
		try {
	  			$query = ("	UPDATE lunchr_menu 
	  						SET
	  						lm_ordre = :id_menu_ordre
	  						WHERE lm_id = :id_menu");
				$curseur = $connexion->prepare($query);
				$curseur->bindValue(':id_menu_ordre', $id_menu_ordre, PDO::PARAM_STR);
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