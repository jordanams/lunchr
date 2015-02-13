<?php

function select_resto($id_resto) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_restaurants as lr, lunchr_users_pro as lup
  											 WHERE lup.lup_id = lr.lup_id 
  											 	and lup.lup_id = :id_resto 
  											 	and lr.lr_actif_valid = 1");
  			
			$select -> execute(array('id_resto'=>$id_resto));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}


function select_resto_afficher($id_user, $id_resto) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_restaurants as lr, lunchr_users_pro as lup
  											 WHERE lup.lup_id = lr.lup_id and lup.lup_id = :id_user and lr.lr_id = :id_resto");
  			
			$select -> execute(array('id_user'=>$id_user, 'id_resto'=>$id_resto));
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