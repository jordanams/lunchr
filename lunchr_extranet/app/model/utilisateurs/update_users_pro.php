<?php

function update_users_pro($nom_user, $prenom_user, $phone_user, $mail_user, $mdp_user, $admin_user, $id) {

/**********  REQUETE  **********/

		global $connexion;
		try {
	  			$query = ("UPDATE lunchr_users_pro
	  													SET
	  													lup_nom = :nom, 
														lup_prenom = :prenom,
														lup_tel = :phone,
														lup_mail = :mail,
														lup_password = :mdp,
														lup_admin = :admin
	  													WHERE lup_id = :id");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nom', $nom_user, PDO::PARAM_STR);
				$curseur->bindValue(':prenom', $prenom_user, PDO::PARAM_STR);
				$curseur->bindValue(':phone', $phone_user, PDO::PARAM_STR);
				$curseur->bindValue(':mail', $mail_user, PDO::PARAM_STR);
				$curseur->bindValue(':mdp', $mdp_user, PDO::PARAM_STR);
				$curseur->bindValue(':admin', $admin_user, PDO::PARAM_STR);
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