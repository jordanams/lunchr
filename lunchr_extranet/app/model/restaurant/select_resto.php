<?php

function select_resto($id_user) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_restaurants as lr, lunchr_users_pro as lup
  											 WHERE lup.lup_id = lr.lup_id and lup.lup_id = :id_user");
  			
			$select -> execute(array('id_user'=>$id_user));
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