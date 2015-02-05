<?php
function supp_menu($id_menu) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_menu 
						 WHERE lm_id = :id_menu";
			
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id_menu', $id_menu, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return true;
        }
		catch ( Exception $e ) {
		die('Erreur Mysql : '.$e->getMessage());
	}
}
?>