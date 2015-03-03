<?php

function update_user($nom, $prenom, $gender, $telephone, $mail, $password, $id) {






/**********  REQUETE  **********/

		global $connexion;
		try {
	  			$query = ("UPDATE lunchr_users
	  													SET
 	  													lu_nom = :lu_nom,  
														lu_prenom = :lu_prenom,
														lu_gender = :lu_gender,
														lu_tel = :lu_telephone,
														lu_mail = :lu_mail,
														lu_password = :lu_password
	  													WHERE lu_id = :id");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':lu_nom', $nom, PDO::PARAM_STR);
				$curseur->bindValue(':lu_prenom', $prenom, PDO::PARAM_STR);
				$curseur->bindValue(':lu_gender', $gender, PDO::PARAM_STR);
				$curseur->bindValue(':lu_telephone', $telephone, PDO::PARAM_STR);
				$curseur->bindValue(':lu_mail', $mail, PDO::PARAM_STR);
				$curseur->bindValue(':lu_password', $password, PDO::PARAM_STR);
				$curseur->bindValue(':id', $id, PDO::PARAM_STR);
				$retour = $curseur->execute();
				$curseur->closeCursor();
				return true;
        	}

        	catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}




function afficher_user($id)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * FROM lunchr_users
											WHERE lu_id = :id");
			$select -> execute(array("id" => $id));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}
	
function afficher_favoris($id)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * FROM lunchr_favoris as lf, lunchr_restaurants as lr
											WHERE lf.lr_id = lr.lr_id AND lu_id = :id");
			$select -> execute(array("id" => $id));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
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

function update_abonnement($newsletter, $news, $text_message, $id) {
	

	global $connexion;
	try {
			$query = ("UPDATE lunchr_abonnement
	  													SET
	  													la_newsletter = :newsletter,
														la_news = :news, 
														la_text_message =	:text_message
	  													WHERE lu_id = :id");		

						
			$curseur = $connexion->prepare($query); 
			$curseur->bindValue(':newsletter', $newsletter, PDO::PARAM_STR);
			$curseur->bindValue(':news', $news, PDO::PARAM_STR);
			$curseur->bindValue(':text_message', $text_message, PDO::PARAM_STR);
			$curseur->bindValue(':id', $id, PDO::PARAM_STR);
			$retour = $curseur->execute();
			$curseur->closeCursor();	
			return true;
		}
			catch ( Exception $e ) {
				die('Erreur Mysql : '.$e->getMessage());
			}
}

function add_abonnement($newsletter, $news, $text_message, $id) {
	
	global $connexion;
	try {
		$query = "insert into lunchr_abonnement
					(	la_newsletter, 
						la_news,
						la_text_message,
						lu_id)
				values 
					(	:newsletter,
						:news,
						:la_text_message, 
						:id)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':newsletter', $newsletter, PDO::PARAM_STR);
		$curseur->bindValue(':news', $news, PDO::PARAM_STR);
		$curseur->bindValue(':la_text_message', $text_message, PDO::PARAM_STR);
		$curseur->bindValue(':id', $id, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}

function afficher_abonnement($id)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * FROM lunchr_abonnement WHERE lu_id = :id");
			$select -> execute(array("id" => $id));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}

function afficher_commande($id)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * FROM lunchr_commandes as lc, lunchr_users as lu, lunchr_restaurants as lr
WHERE lc.lr_id = lr.lr_id
AND lc.lu_id = lu.lu_id
AND lc.lu_id = :id");
			$select -> execute(array("id" => $id));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}

function afficher_produits_commande($id)  {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT lp.lp_nom, lcl.lcl_quantite FROM lunchr_commandes as lc, lunchr_ligne_commande as lcl, lunchr_produits as lp
WHERE lc.lc_id = lcl.lc_id
AND lp.lp_id = lcl.lp_id
AND lc.lc_id = :id");
			$select -> execute(array("id" => $id));
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