<?php
function afficher_carte($id_user, $id_resto) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_carte as lc, lunchr_restaurants as lr, lunchr_users_pro as lup
  											 WHERE lc.lr_id = lr.lr_id and lup.lup_id = lr.lup_id and lup.lup_id = :id_user and lc.lr_id = :id_resto");

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