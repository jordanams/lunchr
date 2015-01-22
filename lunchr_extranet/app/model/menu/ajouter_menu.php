<?php

	function afficher_carte() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_carte as lc, lunchr_restaurants as lr
  											 WHERE lc.lr_id = lr.lr_id");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}



	function afficher_resto() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_restaurants as lr, lunchr_users_pro as lu
  											 WHERE lu.lup_id = lr.lup_id and lr.lr_id = '65'");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}



	function ajouter_menu ($nom_resto, $nom_carte, $nom_menu) {

	global $connexion;
	try {
		$query = "insert into lunchr_menu (lr_id, lce_id, lm_nom)
				values (:nom_resto, :nom_carte ,:nom_menu)";
					
		$curseur = $connexion->prepare($query);
		$curseur->bindValue(':nom_resto', $nom_resto, PDO::PARAM_STR);
		$curseur->bindValue(':nom_carte', $nom_carte, PDO::PARAM_STR);
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