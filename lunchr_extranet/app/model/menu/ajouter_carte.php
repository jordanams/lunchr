<?php
	
function ajouter_carte ($chiffre, $nom_carte) {

	global $connexion;
	try {
		$query = "insert into lunchr_carte (lr_id, lce_nom)
				values ('65' ,:nom_carte)";
					
		$curseur = $connexion->prepare($query);
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