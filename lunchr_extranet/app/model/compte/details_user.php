<?php

function verif_details($id_user) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * FROM lunchr_users_pro WHERE lup_id = :id_user");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_user"=>$id_user));
			$resultat = $select -> fetchAll();
			return $resultat;

			}
	
	catch ( Exception $e ) {
	return false;
	}
}
?>