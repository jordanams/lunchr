<?php
function verif_details($id_users) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * FROM lunchr_users_pro WHERE lup_id = :id_users");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_users"=>$id_users));
			$resultat = $select -> fetchAll();
			return $resultat;

			}
	
	catch ( Exception $e ) {
	return false;
	}
}
?>