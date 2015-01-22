<?php
function afficher_users() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lu_nom, 
  													lu_prenom, 
  													lu_tel, 
  													lu_mail, 
  													lu_admin,
  													lu_password,
  													lu_id FROM lunchr_users");
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
?>