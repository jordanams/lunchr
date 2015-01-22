<?php

function update_users($nom_user, $prenom_user, $phone_user, $mail_user, $mdp_user, $id) {

/**********  REQUETE  **********/

		global $connexion;
		try {
	  			$query = ("UPDATE lunchr_users
	  											SET
	  											lu_nom = :nom, 
												lu_prenom = :prenom,
												lu_tel = :phone,
												lu_mail = :mail,
												lu_password = :mdp
	  											WHERE lu_id = :id");
				$curseur = $connexion->prepare($query); 
				$curseur->bindValue(':nom', $nom_user, PDO::PARAM_STR);
				$curseur->bindValue(':prenom', $prenom_user, PDO::PARAM_STR);
				$curseur->bindValue(':phone', $phone_user, PDO::PARAM_STR);
				$curseur->bindValue(':mail', $mail_user, PDO::PARAM_STR);
				$curseur->bindValue(':mdp', $mdp_user, PDO::PARAM_STR);
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