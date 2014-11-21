<?php
function afficher_users() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lup_nom, 
  													lup_prenom, 
  													lup_tel, 
  													lup_mail, 
  													lup_admin, 
  													lup_id FROM lunchr_users_pro");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_NUM);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}
?>