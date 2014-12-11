<?php
function supp_resto($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_restaurants WHERE
					lr_id = :id";
			
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

function supp_notif_resto($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_notifications WHERE
					lr_id = :id";
			
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

function supp_horraire_resto($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_horraire WHERE
					lr_id = :id";
			
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