<?php
function search($requete) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * FROM lunchr_restaurants 
WHERE 
lr_nom like :requete or lr_adresse like :requete or lr_code_postal like :requete or lr_ville like :requete or lr_pays like :requete");

			$select->execute(array("requete" => '%'.$requete.'%'));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

?>