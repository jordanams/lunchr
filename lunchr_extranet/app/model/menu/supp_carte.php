<?php
function supp_carte($id_carte) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_carte 
						 WHERE lce_id = :id_carte";
			
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id_carte', $id_carte, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return true;
        }
		catch ( Exception $e ) {
		die('Erreur Mysql : '.$e->getMessage());
	}
}
?>