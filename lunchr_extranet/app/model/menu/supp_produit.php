<?php
function supp_produit($id_produit) {

	global $connexion;
	try {
		$query = "DELETE FROM lunchr_produits 
						 WHERE lp_id = :id_produit";
			
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return true;
        }
		catch ( Exception $e ) {
		die('Erreur Mysql : '.$e->getMessage());
	}
}
?>