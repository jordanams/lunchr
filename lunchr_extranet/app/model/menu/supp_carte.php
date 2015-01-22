<?php
function supp_carte($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_carte 
						 WHERE lce_id = :id";
			
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