<?php

	function ajouter_menu ($id_resto, $id_carte, $nom_menu) {

	global $connexion;
	try {
		$query = "insert into lunchr_menu (lr_id, lce_id, lm_nom)
				values (:id_resto, :id_carte ,:nom_menu)";
					
		$curseur = $connexion->prepare($query);
		$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
		$curseur->bindValue(':id_carte', $id_carte, PDO::PARAM_STR);
		$curseur->bindValue(':nom_menu', $nom_menu, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

?>