<?php

	function ajouter_produit($nom_carte, $nom_resto, $nom_produit, $prix_produit, $desc_produit, $avatar1) {

		/****************  Image  ****************/

		if($_FILES['ch_file1']['name'] == "") {
			$avatar1="";
			//echo $avatar1;
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
			$query = "insert into lunchr_produits	(	lm_id, 
														lr_id,
														lp_nom,
														lp_prix,
														lp_description,
														lp_image)
												values (:nom_carte,
														:nom_resto, 
														:nom_produit,
														:prix_produit,
														:desc_produit,
														:image1)";
						
			$curseur = $connexion->prepare($query);
			$curseur->bindValue(':nom_carte', $nom_carte, PDO::PARAM_STR);
			$curseur->bindValue(':nom_resto', $nom_resto, PDO::PARAM_STR);
			$curseur->bindValue(':nom_produit', $nom_produit, PDO::PARAM_STR);
			$curseur->bindValue(':prix_produit', $prix_produit, PDO::PARAM_STR);
			$curseur->bindValue(':desc_produit', $desc_produit, PDO::PARAM_STR);
			$curseur->bindValue(':image1', $avatar1, PDO::PARAM_STR);
			$retour = $curseur->execute();
			$curseur->closeCursor();	
			return true;
		}

		catch ( Exception $e ) {
		die('Erreur Mysql : '.$e->getMessage());
		}
	}



// 	function ajouter_menu ($chiffre_resto, $chiffre_carte, $nom_menu) {

// 	global $connexion;
// 	try {
// 		$query = "insert into lunchr_menu (lr_id, lce_id, lm_nom)
// 				values ('65', '1' ,:nom_menu)";
					
// 		$curseur = $connexion->prepare($query);
// 		$curseur->bindValue(':nom_menu', $nom_menu, PDO::PARAM_STR);
// 		$retour = $curseur->execute();
// 		$curseur->closeCursor();	
// 		return true;
// 	}

// 	catch ( Exception $e ) {
// 	die('Erreur Mysql : '.$e->getMessage());
// 	}
// }

?>