<?php
function afficher_commande($id_resto)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											FROM lunchr_commandes as lc, 
  												 lunchr_users as lu, 
  												 lunchr_restaurants as lr
											WHERE lc.lr_id = lr.lr_id
											AND lc.lu_id = lu.lu_id
											AND lc.lr_id = :id_resto
											and lc.lc_statut = 0
											and lc.lc_date_dish LIKE '".date("Y-m-d")."%'");
			$select -> execute(array("id_resto" => $id_resto));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}

function afficher_produits_commande($id)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											FROM lunchr_commandes as lc, 
  												lunchr_ligne_commande as lcl, 
  												lunchr_produits as lp
											WHERE lc.lc_id = lcl.lc_id
											AND lp.lp_id = lcl.lp_id
											AND lc.lc_id = :id");
			$select -> execute(array("id" => $id));
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