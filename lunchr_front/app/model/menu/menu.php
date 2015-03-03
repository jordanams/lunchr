<?php
function detail_restaurant($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * FROM lunchr_restaurants 
WHERE 
lr_id = :id");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function verif_quantity($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT *
FROM lunchr_produits
WHERE lp_id = :id
");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function select_carte($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT lc.lce_id
FROM lunchr_carte as lc, lunchr_restaurants as lr
WHERE
lc.lr_id = lr.lr_id 
AND
lr.lr_id = :id
AND 
lc.lce_actif = 1");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function select_menu($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT lm_nom, lm_id, lm_ordre
FROM lunchr_carte as lc, lunchr_menu as lm
WHERE
lc.lce_id = lm.lce_id
AND
lc.lce_id = :id
ORDER BY lm.lm_ordre
");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function select_produits($id, $menu) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT *
FROM lunchr_menu as lm
LEFT JOIN lunchr_produits as lp ON lp.lm_id = lm.lm_id
WHERE
lm.lce_id = :id
AND lm.lm_id = :menu
ORDER BY lm.lm_ordre");

			$select->execute(array("id" => $id, "menu" => $menu));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

function select_horraire($id, $day) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * FROM lunchr_horraire as lh
WHERE lr_id = :id AND lh_day = :day");

			$select->execute(array("id" => $id, "day" => $day));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

function ajout_heure($heure,$ajout)
{
$timestamp = strtotime("$heure");
$heure_ajout = strtotime("+$ajout minutes", $timestamp);
return $heure_ajout = date('H:i', $heure_ajout);
}

function select_horraire_HEURE($id, $day) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT HOUR(lh_open_day) as open_day, HOUR(lh_close_day) as close_day, HOUR(lh_open_night) as open_night, HOUR(lh_close_night) as close_night, lh_day  FROM lunchr_horraire as lh
WHERE lr_id = :id AND lh_day = :day");

			$select->execute(array("id" => $id, "day" => $day));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function select_produits_panier($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * FROM lunchr_produits WHERE lp_id = :id");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

function select_favoris($id, $id_resto) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * FROM lunchr_favoris WHERE lr_id=:id_resto AND lu_id=:id");

			$select->execute(array("id" => $id, "id_resto" => $id_resto));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

function select_mail($mail) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT COUNT(lu_mail) FROM lunchr_users WHERE lu_mail=:mail");

			$select->execute(array("mail" => $mail));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function add_favorite($id, $id_resto) {
	
	global $connexion;
	try {
		$query = "insert into lunchr_favoris
					(	lu_id, 
						lr_id)
				values 
					(	:id, 
						:id_resto)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id', $id, PDO::PARAM_STR);
		$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

function add_commandes($id, $id_resto, $date, $statut, $type_paiment, $commentaire, $transactionid, $date_dish, $heure_dish, $nombre_personnes, $total) {
	
	global $connexion;
	try {
		$query = "insert into lunchr_commandes
					(	lr_id, 
						lu_id,
						lc_date_paiment,
						lc_statut,
						lc_type_paiment,
						lc_commentaire,
						lc_transactionid,
						lc_date_dish,
						lc_heure_dish,
						lc_nombre_personnes,
						lc_total)
				values 
					(	:id_resto, 
						:id,
						:date_paiment,
						:statut,
						:type_paiment,
						:commentaire,
						:transactionid,
						:date_dish,
						:heure_dish,
						:nombre_personnes,
						:lc_total)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id', $id, PDO::PARAM_STR);
		$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
		$curseur->bindValue(':date_paiment', $date, PDO::PARAM_STR);
		$curseur->bindValue(':statut', $statut, PDO::PARAM_STR);
		$curseur->bindValue(':type_paiment', $type_paiment, PDO::PARAM_STR);
		$curseur->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
		$curseur->bindValue(':transactionid', $transactionid, PDO::PARAM_STR);
		$curseur->bindValue(':date_dish', $date_dish, PDO::PARAM_STR);
		$curseur->bindValue(':heure_dish', $heure_dish, PDO::PARAM_STR);
		$curseur->bindValue(':nombre_personnes', $nombre_personnes, PDO::PARAM_STR);
		$curseur->bindValue(':lc_total', $total, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

function add_ligne_commandes($commande_id, $produit_id, $id_resto, $quantite) {
	
	global $connexion;
	try {
		$query = "insert into lunchr_ligne_commande
					(	lc_id, 
						lp_id,
						lr_id,
						lcl_quantite)
				values 
					(	:lc_id, 
						:lp_id,
						:lr_id,
						:lcl_quantite)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':lc_id', $commande_id, PDO::PARAM_STR);
		$curseur->bindValue(':lp_id', $produit_id, PDO::PARAM_STR);
		$curseur->bindValue(':lr_id', $id_resto, PDO::PARAM_STR);
		$curseur->bindValue(':lcl_quantite', $quantite, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

function update_quantity($quantity, $id) {
	

	global $connexion;
	try {
			$query = ("UPDATE lunchr_produits
	  													SET
	  													lp_quantites = lp_quantites-:quantity
	  													WHERE lp_id = :id");		

						
			$curseur = $connexion->prepare($query); 
			$curseur->bindValue(':quantity', $quantity, PDO::PARAM_STR);
			$curseur->bindValue(':id', $id, PDO::PARAM_STR);
			$retour = $curseur->execute();
			$curseur->closeCursor();	
			return true;
		}
			catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}




function del_favorite($id_resto, $id) {
	
	global $connexion;
	try {
		$query = "DELETE FROM lunchr_favoris WHERE lr_id=:id_resto AND lu_id=:id";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id_resto', $id_resto, PDO::PARAM_STR);
		$curseur->bindValue(':id', $id, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}





?>
