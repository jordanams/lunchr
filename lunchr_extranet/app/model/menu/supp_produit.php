<?php
function supp_produit($id) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_produits 
						 WHERE lp_id = :id";
			
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