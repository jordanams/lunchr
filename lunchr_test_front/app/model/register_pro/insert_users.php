<?php
function insert_users(	$nom_users, 
						$prenom_users, 
						$phone_users, 
						$mail_users, 
						$mdp_users,
						$admin_users,
						$country,
						$gender) {

	global $connexion;
	try {
		$query = "insert into lunchr_users
					(	lu_nom, 
						lu_prenom, 
						lu_tel, 
						lu_mail,
						lu_password,
						lu_admin,
						lu_country,
						lu_gender)
				values 
					(	:nom_users, 
						:prenom_users, 
						:phone_users, 
						:mail_users, 
						:mdp_users, 
						:admin_users,
						:country,
						:gender)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':nom_users', $nom_users, PDO::PARAM_STR);
		$curseur->bindValue(':prenom_users', $prenom_users, PDO::PARAM_STR);
		$curseur->bindValue(':phone_users', $phone_users, PDO::PARAM_STR);
		$curseur->bindValue(':mail_users', $mail_users, PDO::PARAM_STR);
		$curseur->bindValue(':mdp_users', $mdp_users, PDO::PARAM_STR);
		$curseur->bindValue(':admin_users', $admin_users, PDO::PARAM_STR);
		$curseur->bindValue(':country', $country, PDO::PARAM_STR);
		$curseur->bindValue(':gender', $gender, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}




function insert_users_pro(	$nom_users, 
							$prenom_users, 
							$phone_users, 
							$mail_users, 
							$mdp_users,
							$country,
							$admin_users,
							$gender) {

	global $connexion;
	try {
		$query = "insert into lunchr_users_pro
					(	lup_nom, 
						lup_prenom, 
						lup_tel, 
						lup_mail,
						lup_password,
						lup_country,
						lup_admin,
						lup_gender)
				values 
					(	:nom_users, 
						:prenom_users, 
						:phone_users, 
						:mail_users, 
						:mdp_users, 
						:country,
						:admin_users,
						:gender)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':nom_users', $nom_users, PDO::PARAM_STR);
		$curseur->bindValue(':prenom_users', $prenom_users, PDO::PARAM_STR);
		$curseur->bindValue(':phone_users', $phone_users, PDO::PARAM_STR);
		$curseur->bindValue(':mail_users', $mail_users, PDO::PARAM_STR);
		$curseur->bindValue(':mdp_users', $mdp_users, PDO::PARAM_STR);
		$curseur->bindValue(':country', $country, PDO::PARAM_STR);
		$curseur->bindValue(':admin_users', $admin_users, PDO::PARAM_STR);
		$curseur->bindValue(':gender', $gender, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}



?>