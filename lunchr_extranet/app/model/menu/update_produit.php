<?php

function verif_produit($id_produit) {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT * 
                                     FROM lunchr_restaurants as lr, lunchr_carte as lc, lunchr_menu as lm, lunchr_produits as lp
                                     WHERE lr.lr_id = lc.lr_id 
                                     and lc.lce_id = lm.lce_id
                                     and lm.lm_id = lp.lm_id
                                     and lp.lp_id = :id_produit");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute(array("id_produit"=>$id_produit));
			$resultat = $select -> fetchAll();
			return $resultat;
			}
	
	catch ( Exception $e ) {
	return false;
	}
}





function update_produit ($nom_produit, $prix_produit, $desc_produit, $avatar1, $id_produit) {


/****************  Image n°1  ****************/

	if($_FILES['ch_file1']['name'] == "") {
		
			if($_SESSION['image_produit'] == "") {
				$avatar1="";
			}
				else {
					$avatar1=$_SESSION['image_produit'];
				}
	}

	else {

		$url = md5(uniqid(rand(), true));
		$avatar1="localhost:8888/LunchR/lunchr_extranet/public/images/img_produits/".$url.".jpg";

		if (move_uploaded_file($_FILES['ch_file1'] ['tmp_name'],"images/img_produits/".$url.".jpg"))

		$ext = array ( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$ext_upload = strtolower ( substr ( strrchr($_FILES['ch_file1']['name'], '.') ,1) );
		if ( in_array($ext_upload,$ext) )

		$image1 = ImageCreateFromJPEG("images/img_produits/".$url.".jpg");
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
		ImageJPEG($thumb, "images/img_produits/".$url.".jpg");
		//chmod ("fichiers/".$url.".jpg",0644);
		imagedestroy($image1);
	}

/**********  REQUETE  **********/

		global $connexion;
		try {
	  			$query = (" UPDATE lunchr_produits
	  													SET
	  													lp_nom = :nom_produit, 
														lp_prix = :prix_produit,
														lp_description = :desc_produit,
														lp_image = :avatar1
	  													WHERE lp_id = :id_produit");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nom_produit', $nom_produit, PDO::PARAM_STR);
				$curseur->bindValue(':prix_produit', $prix_produit, PDO::PARAM_STR);
				$curseur->bindValue(':desc_produit', $desc_produit, PDO::PARAM_STR);
				$curseur->bindValue(':avatar1', $avatar1, PDO::PARAM_STR);
				$curseur->bindValue(':id_produit', $id_produit, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}
?>