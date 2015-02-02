<?php
function verif_user($login, $password) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * 
										   FROM lunchr_users 
										   WHERE lu_mail=:login
										   AND lu_password=:password");

			$select->execute(array("login"=>$login, "password"=>$password));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			//var_dump($resultat);
			$count = count($resultat);

			if($count == 1) {
				$_SESSION['login'] = $resultat[0]['lu_mail'];
				echo 1;
				}
			else {
				echo 0;
			}
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

function gestion_suggestion() {
	
		global $connexion;

		try {
			$select = $connexion->prepare("SELECT 	*
  													FROM lunchr_restaurants as lr, lunchr_suggestion as ls
  													WHERE lr.lr_id = ls.lr_id");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			$resultat = $select -> fetchAll();
			return $resultat;

			}
	
	catch ( Exception $e ) {
	return false;
	}
}

?>