<?php
function verif_count_notif() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * FROM lunchr_notifications WHERE ln_view=0 ");
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

function new_restaurant() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lr.lr_id, lr.lr_nom
  											 FROM
													lunchr_notifications as ln,
													lunchr_restaurants as lr
											 WHERE 
													ln.lr_id = lr.lr_id
											ORDER BY lr.lr_id DESC

");
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


function update_notifications($type) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("UPDATE lunchr_notifications
  											 SET     ln_view = 1
											 WHERE 
													ln_type = :type

");			$select->bindParam(':type', $type, PDO::PARAM_STR);  
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