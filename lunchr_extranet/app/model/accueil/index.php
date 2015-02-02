<?php
function verif_user($login, $password) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * 
										   FROM minitp_users 
										   WHERE USER_LOGIN=:login
										   AND USER_PASSWORD=:password");

			$select->execute(array("login"=>$login, "password"=>$password));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			//var_dump($resultat);
			$count = count($resultat);

			if($count == 1) {
				$_SESSION['login'] = $_GET['login'];
				$_SESSION['admin'] = $resultat[0]['USER_ADMIN'];
				header('Location:index.php?module=accueil&action=index&login_success=1');
			}
			else {
				header('Location:index.php?module=login&action=index&login_success=0');
			}
		}
	
	catch ( Exception $e ) {
	return false;
	}

}
?>