<?php
function supp_users($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_users WHERE
					lu_id = :id";
			
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id', $id, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return true;
        }
		catch ( Exception $e ) {
		die('Erreur Mysql : '.$e->getMessage());
	}
}

function supp_users_pro($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_users_pro WHERE
					lup_id = :id";
			
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id', $id, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return true;
        }
		catch ( Exception $e ) {
		die('Erreur Mysql : '.$e->getMessage());
	}
}
?>