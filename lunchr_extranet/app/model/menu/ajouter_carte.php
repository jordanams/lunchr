<?php
	
function ajouter_carte ($id_resto, $nom_carte) {

	global $connexion;
	try {
		$query = "insert into lunchr_carte (lr_id, lce_nom)
				values (:id_resto, :nom_carte)";
					
		$curseur = $connexion->prepare($query);
		$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
		$curseur->bindValue(':nom_carte', $nom_carte, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

?>