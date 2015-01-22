<?php
function supp_menu($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_menu 
						 WHERE lm_id = :id";
			
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