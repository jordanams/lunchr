<?php
function verif_details($id_resto) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT lr.lr_nom, 
  													lr.lr_adresse, 
  													lr.lr_description, 
  													lr.lr_id,
  													lr.lr_image_1,
  													lh.lh_day,
  													TIME_FORMAT(lh.lh_open_day, '%H:%i') as lh_open_day,
  													TIME_FORMAT(lh.lh_close_day, '%H:%i') as lh_close_day, 
  													TIME_FORMAT(lh.lh_open_night, '%H:%i') as lh_open_night,
  													TIME_FORMAT(lh.lh_close_night, '%H:%i') as lh_close_night,
  													lh.lh_closed 
  													FROM lunchr_restaurants as lr, lunchr_horraire as lh
  													WHERE lr.lr_id = lh.lr_id
  													AND lh.lr_id = :id_resto");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_resto"=>$id_resto));
			$resultat = $select -> fetchAll();
			return $resultat;

			}
	
	catch ( Exception $e ) {
	return false;
	}
}
?>