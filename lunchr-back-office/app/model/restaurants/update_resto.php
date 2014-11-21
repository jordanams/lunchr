<?php
function update_resto($nom, $adresse, $description, $horraire, $avatar, $id) {

	if($_FILES['ch_file']['name'] == "") {
		$avatar="";
		echo $avatar;
	}
	else {
	$url = md5(uniqid(rand(), true));
	$avatar="http://ns366377.ovh.net/chekroun/perso/lunchr/dev/lunchr_back-office/public/images/img_restaurants/".$url.".jpg";

		if (move_uploaded_file($_FILES['ch_file'] ['tmp_name'],"images/img_restaurants/".$url.".jpg"))

		$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file']['name'], '.') ,1) );
		if ( in_array($ext_upload,$ext) )

		$image = ImageCreateFromJPEG("images/img_restaurants/".$url.".jpg");
		$width = imagesx($image) ;
		$height = imagesy($image) ;
		
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
		imagecopyresized($thumb,$image,0,0,0,0,$new_width,	    $new_height,$width,$height);
		ImageJPEG($thumb, "images/img_restaurants/".$url.".jpg");
		//chmod ("fichiers/".$url.".jpg",0644);
		imagedestroy($image);
	}
		global $connexion;
		try {
  			$query = ("UPDATE lunchr_restaurants
  													SET
  													lr_nom = :nom, 
  													lr_adresse = :adresse, 
  													lr_description = :description, 
  													lr_horraire = :horraire,
  													lr_image_1 = :image
  													WHERE lr_id = :id");
			$curseur = $connexion->prepare($query); 
			$curseur->bindValue(':id', $id, PDO::PARAM_INT);
			$curseur->bindValue(':nom', $nom, PDO::PARAM_INT);
			$curseur->bindValue(':adresse', $adresse, PDO::PARAM_INT);
			$curseur->bindValue(':description', $description, PDO::PARAM_INT);
			$curseur->bindValue(':horraire', $horraire, PDO::PARAM_INT);
			$curseur->bindValue(':image', $avatar, PDO::PARAM_STR);
			$retour = $curseur->execute();
			$curseur->closeCursor();
			return true;
        	}
			catch ( Exception $e ) {
			die('Erreur Mysql : '.$e->getMessage());
			}
	}
?>