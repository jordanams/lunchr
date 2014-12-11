<?php
function afficher_users_pro() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lup_nom, 
  													lup_prenom, 
  													lup_tel, 
  													lup_mail, 
  													lup_admin,
  													lup_password, 
  													lup_id FROM lunchr_users_pro");
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