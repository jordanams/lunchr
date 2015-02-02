<?php
	
function insert_resto($nom_resto, $adresse_resto, $longitude, $latitude, $pays, $ville, $code_postal, $page_facebook, $website, $lr_tel, $lup_id) {


	/**********  REQUETE  **********/

	global $connexion;
	try {
		$query = "insert into lunchr_restaurants (lr_nom, 
													lr_adresse,
													lr_longitude,
													lr_latitude,
													lr_pays,
													lr_ville,
													lr_code_postal,
													lr_page_facebook,
													lr_website,
													lr_tel,
													lup_id
													)
											values (:nom_resto, 
													:adresse_resto,
													:longitude,
													:latitude,
													:pays,
													:ville,
													:code_postal,
													:page_facebook,
													:website,
													:tel,
													:lup_id)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':nom_resto', $nom_resto, PDO::PARAM_STR);
		$curseur->bindValue(':adresse_resto', $adresse_resto, PDO::PARAM_STR);
		$curseur->bindValue(':longitude', $longitude, PDO::PARAM_STR);
		$curseur->bindValue(':latitude', $latitude, PDO::PARAM_STR);
		$curseur->bindValue(':pays', $pays, PDO::PARAM_STR);
		$curseur->bindValue(':ville', $ville, PDO::PARAM_STR);
		$curseur->bindValue(':code_postal', $code_postal, PDO::PARAM_STR);
		$curseur->bindValue(':page_facebook', $page_facebook, PDO::PARAM_STR);
		$curseur->bindValue(':website', $website, PDO::PARAM_STR);
		$curseur->bindValue(':tel', $lr_tel, PDO::PARAM_STR);
		$curseur->bindValue(':lup_id', $lup_id, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

function insert_notif($id, $type) 
{
	global $connexion;
	try {
		$query = "insert into lunchr_notifications (lr_id, 
													ln_type)
				values (:id_resto, 
						:type_notifs)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id_resto', $id, PDO::PARAM_STR);
		$curseur->bindValue(':type_notifs', $type, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}

}

function insert_horraire_resto($jour, $horraire_ouverture_day, $horraire_fermeture_day, $horraire_ouverture_night, $horraire_fermeture_night, $id_resto)
{
	global $connexion;
	try {
		$query = "insert into lunchr_horraire (lh_day, 
													lh_open_day, 
													lh_close_day,
													lh_open_night, 
													lh_close_night,
													lr_id)
				values (:day, 
						:open_day, 
						:close_day,
						:open_night, 
						:close_night,
						:id_restaurant)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':day', $jour, PDO::PARAM_STR);
		$curseur->bindValue(':open_day', $horraire_ouverture_day, PDO::PARAM_STR);
		$curseur->bindValue(':close_day', $horraire_fermeture_day, PDO::PARAM_STR);
		$curseur->bindValue(':open_night', $horraire_ouverture_night, PDO::PARAM_STR);
		$curseur->bindValue(':close_night', $horraire_fermeture_night, PDO::PARAM_STR);
		$curseur->bindValue(':id_restaurant', $id_resto, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

?>