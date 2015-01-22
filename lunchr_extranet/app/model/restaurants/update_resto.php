<?php

function update_resto($nom_resto, $adresse_resto, $longitude, $latitude, $pays, $ville, $code_postal, $desc_resto, $avatar1, $avatar2, $avatar3, $avatar4, $id) {


/****************  Image n°1  ****************/

	if($_FILES['ch_file1']['name'] == "") {
		
			if($_SESSION['restaurants_image_1'] == "") {
				$avatar1="";
			}
				else {
					$avatar1=$_SESSION['restaurants_image_1'];
				}
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
		
			if($_SESSION['restaurants_image_2'] == "") {
				$avatar2="";
			}
				else {
					$avatar2=$_SESSION['restaurants_image_2'];
			}	
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
		
			if($_SESSION['restaurants_image_3'] == "") {
				$avatar3="";
			}
				else {
					$avatar3=$_SESSION['restaurants_image_3'];
				}
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

			if($_SESSION['restaurants_image_4'] == "") {
				$avatar4="";
			}
				else {
					$avatar4=$_SESSION['restaurants_image_4'];
			}
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
	  			$query = ("UPDATE lunchr_restaurants
	  													SET
	  													lr_nom = :nom, 
														lr_adresse = :adresse,
														lr_longitude = :longitude,
														lr_latitude = :latitude,
														lr_pays = :pays,
														lr_ville = :ville,
														lr_code_postal = :code_postal, 
														lr_description = :description,
														lr_image_1 = :image1,
														lr_image_2 = :image2,
														lr_image_3 = :image3, 
														lr_image_4 = :image4 
	  													WHERE lr_id = :id");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nom', $nom_resto, PDO::PARAM_STR);
				$curseur->bindValue(':adresse', $adresse_resto, PDO::PARAM_STR);
				$curseur->bindValue(':longitude', $longitude, PDO::PARAM_STR);
				$curseur->bindValue(':latitude', $latitude, PDO::PARAM_STR);
				$curseur->bindValue(':pays', $pays, PDO::PARAM_STR);
				$curseur->bindValue(':ville', $ville, PDO::PARAM_STR);
				$curseur->bindValue(':code_postal', $code_postal, PDO::PARAM_STR);
				$curseur->bindValue(':description', $desc_resto, PDO::PARAM_STR);
				$curseur->bindValue(':image1', $avatar1, PDO::PARAM_STR);
				$curseur->bindValue(':image2', $avatar2, PDO::PARAM_STR);
				$curseur->bindValue(':image3', $avatar3, PDO::PARAM_STR);
				$curseur->bindValue(':image4', $avatar4, PDO::PARAM_STR);
				$curseur->bindValue(':id', $id, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}


function update_horraire_resto($jour, $horraire_ouverture_day, $horraire_fermeture_day, $horraire_ouverture_night, $horraire_fermeture_night, $id_resto) {
	

	global $connexion;
	try {
			$query = ("UPDATE lunchr_restaurants
	  													SET
	  													lh_day = :day,
														lh_open_day = :open_day, 
														lh_close_day =	:close_day,
														lh_open_night = :open_night, 
														lh_close_night = :close_night,
														lr_id = :id_restaurant
	  													WHERE lr_id = :id_restaurant");		

						
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