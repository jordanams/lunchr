<?php
	
function insert_resto($nom_resto, $adresse_resto, $longitude, $latitude, $pays, $ville, $code_postal, $desc_resto, $avatar1, $avatar2, $avatar3, $avatar4) {


	/****************  Image n°1  ****************/

	if($_FILES['ch_file1']['name'] == "") {
		$avatar1="";
		echo $avatar1;
	}

	else {

		$url = md5(uniqid(rand(), true));
		$avatar1="http://ns366377.ovh.net/chekroun/perso/lunchr/dev/lunchr_back-office/public/images/img_restaurants/".$url.".jpg";

		if (move_uploaded_file($_FILES['ch_file1'] ['tmp_name'],"images/img_restaurants/".$url.".jpg"))

		$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file1']['name'], '.') ,1) );
		if ( in_array($ext_upload,$ext) )

		$image1 = ImageCreateFromJPEG("images/img_restaurants/".$url.".jpg");
		$width = imagesx($image1) ;
		$height = imagesy($image1) ;


			if($width>$height) {
				// Format horizontal
				$new_width = 500;
				$new_height = ($new_width * $height) / $width ;
			}
			else {
				// Format vertical
				$new_height = 500;
				$new_width = ($new_height * $width) / $height;
			}
	
		$thumb = imagecreatetruecolor($new_width,$new_height);
		imagecopyresized($thumb,$image1,0,0,0,0,$new_width,$new_height,$width,$height);
		ImageJPEG($thumb, "images/img_restaurants/".$url.".jpg");
		//chmod ("fichiers/".$url.".jpg",0644);
		imagedestroy($image1);
	}



	/****************  Image n°2  ****************/

	if($_FILES['ch_file2']['name'] == "") {
		$avatar2="";
		echo $avatar2;
	}

	else {

		$url = md5(uniqid(rand(), true));
		$avatar2="http://ns366377.ovh.net/chekroun/perso/lunchr/dev/lunchr_back-office/public/images/img_restaurants/".$url.".jpg";

		if (move_uploaded_file($_FILES['ch_file2'] ['tmp_name'],"images/img_restaurants/".$url.".jpg"))

		$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file2']['name'], '.') ,1) );
		if ( in_array($ext_upload,$ext) )

		$image2 = ImageCreateFromJPEG("images/img_restaurants/".$url.".jpg");
		$width = imagesx($image2) ;
		$height = imagesy($image2) ;


			if($width>$height) {
				// Format horizontal
				$new_width = 500;
				$new_height = ($new_width * $height) / $width ;
			}
			else {
				// Format vertical
				$new_height = 500;
				$new_width = ($new_height * $width) / $height;
			}
	
		$thumb = imagecreatetruecolor($new_width,$new_height);
		imagecopyresized($thumb,$image2,0,0,0,0,$new_width,$new_height,$width,$height);
		ImageJPEG($thumb, "images/img_restaurants/".$url.".jpg");
		//chmod ("fichiers/".$url.".jpg",0644);
		imagedestroy($image2);
	}



	/****************  Image n°3  ****************/

	if($_FILES['ch_file3']['name'] == "") {
		$avatar3="";
		echo $avatar3;
	}

	else {

		$url = md5(uniqid(rand(), true));
		$avatar3="http://ns366377.ovh.net/chekroun/perso/lunchr/dev/lunchr_back-office/public/images/img_restaurants/".$url.".jpg";

		if (move_uploaded_file($_FILES['ch_file3'] ['tmp_name'],"images/img_restaurants/".$url.".jpg"))

		$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file3']['name'], '.') ,1) );
		if ( in_array($ext_upload,$ext) )

		$image3 = ImageCreateFromJPEG("images/img_restaurants/".$url.".jpg");
		$width = imagesx($image3) ;
		$height = imagesy($image3) ;


			if($width>$height) {
				// Format horizontal
				$new_width = 500;
				$new_height = ($new_width * $height) / $width ;
			}
			else {
				// Format vertical
				$new_height = 500;
				$new_width = ($new_height * $width) / $height;
			}
	
		$thumb = imagecreatetruecolor($new_width,$new_height);
		imagecopyresized($thumb,$image3,0,0,0,0,$new_width,$new_height,$width,$height);
		ImageJPEG($thumb, "images/img_restaurants/".$url.".jpg");
		//chmod ("fichiers/".$url.".jpg",0644);
		imagedestroy($image3);
	}



	/****************  Image n°4  ****************/

	if($_FILES['ch_file4']['name'] == "") {
		$avatar4="";
		echo $avatar4;
	}

	else {

		$url = md5(uniqid(rand(), true));
		$avatar4="http://ns366377.ovh.net/chekroun/perso/lunchr/dev/lunchr_back-office/public/images/img_restaurants/".$url.".jpg";

		if (move_uploaded_file($_FILES['ch_file4'] ['tmp_name'],"images/img_restaurants/".$url.".jpg"))

		$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file4']['name'], '.') ,1) );
		if ( in_array($ext_upload,$ext) )

		$image4 = ImageCreateFromJPEG("images/img_restaurants/".$url.".jpg");
		$width = imagesx($image4) ;
		$height = imagesy($image4) ;


			if($width>$height) {
				// Format horizontal
				$new_width = 500;
				$new_height = ($new_width * $height) / $width ;
			}
			else {
				// Format vertical
				$new_height = 500;
				$new_width = ($new_height * $width) / $height;
			}
	
		$thumb = imagecreatetruecolor($new_width,$new_height);
		imagecopyresized($thumb,$image4,0,0,0,0,$new_width,$new_height,$width,$height);
		ImageJPEG($thumb, "images/img_restaurants/".$url.".jpg");
		//chmod ("fichiers/".$url.".jpg",0644);
		imagedestroy($image4);
	}




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
													lr_description,
													lr_image_1,
													lr_image_2,
													lr_image_3,
													lr_image_4)
											values (:nom_resto, 
													:adresse_resto,
													:longitude,
													:latitude,
													:pays,
													:ville,
													:code_postal,
													:desc_resto,
													:image1,
													:image2,
													:image3,
													:image4)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':nom_resto', $nom_resto, PDO::PARAM_STR);
		$curseur->bindValue(':adresse_resto', $adresse_resto, PDO::PARAM_STR);
		$curseur->bindValue(':longitude', $longitude, PDO::PARAM_STR);
		$curseur->bindValue(':latitude', $latitude, PDO::PARAM_STR);
		$curseur->bindValue(':pays', $pays, PDO::PARAM_STR);
		$curseur->bindValue(':ville', $ville, PDO::PARAM_STR);
		$curseur->bindValue(':code_postal', $code_postal, PDO::PARAM_STR);
		$curseur->bindValue(':desc_resto', $desc_resto, PDO::PARAM_STR);
		$curseur->bindValue(':image1', $avatar1, PDO::PARAM_STR);
		$curseur->bindValue(':image2', $avatar2, PDO::PARAM_STR);
		$curseur->bindValue(':image3', $avatar3, PDO::PARAM_STR);
		$curseur->bindValue(':image4', $avatar4, PDO::PARAM_STR);
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