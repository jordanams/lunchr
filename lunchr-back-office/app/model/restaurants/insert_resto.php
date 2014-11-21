<?php

	
function insert_resto($nom_resto, $adresse_resto, $desc_resto, $avatar) {

	if($_FILES['ch_file']['name'] == "")
	{
		$avatar="";
		echo $avatar;
	}
	else
	{
	$url = md5(uniqid(rand(), true));
	$avatar="http://ns366377.ovh.net/chekroun/perso/lunchr/dev/lunchr_back-office/public/images/img_restaurants/".$url.".jpg";

	if (move_uploaded_file($_FILES['ch_file'] ['tmp_name'],"images/img_restaurants/".$url.".jpg"))

	$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
	$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file']['name'], '.') ,1) );
	if ( in_array($ext_upload,$ext) )

	$image = ImageCreateFromJPEG("images/img_restaurants/".$url.".jpg");
	$width = imagesx($image) ;
	$height = imagesy($image) ;
	if($width>$height)
	{
		// Format horizontal
		$new_width = 500;
		$new_height = ($new_width * $height) / $width ;
	}
	else
	{
		// Format vertical
		$new_height = 500;
		$new_width = ($new_height * $width) / $height;
	}
	
	$thumb = imagecreatetruecolor($new_width,$new_height);
	imagecopyresized($thumb,$image,0,0,0,0,$new_width,	    $new_height,$width,$height);
	ImageJPEG($thumb, "images/img_restaurants/".$url.".jpg");
	//chmod ("fichiers/".$url.".jpg",0644);
	imagedestroy($image);
}

	global $connexion;
	try {
		$query = "insert into lunchr_restaurants (lr_nom, 
													lr_adresse, 
													lr_description,
													lr_image_1)
											values (:nom_resto, 
													:adresse_resto, 
													:desc_resto,
													:image)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':nom_resto', $nom_resto, PDO::PARAM_STR);
		$curseur->bindValue(':adresse_resto', $adresse_resto, PDO::PARAM_STR);
		$curseur->bindValue(':desc_resto', $desc_resto, PDO::PARAM_STR);
		$curseur->bindValue(':image', $avatar, PDO::PARAM_STR);
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