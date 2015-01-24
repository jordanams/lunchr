<?php
function verif_user($login, $password) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * 
										   FROM lunchr_users_pro
										   WHERE lup_mail=:login and lup_password=:password");

			$select->execute(array("login"=>$login, "password"=>$password));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			//var_dump($resultat);
			//die();
			$count = count($resultat);


			if($count == 1) {
				if($resultat[0]['lup_actif'] == 0){
					header('Location:index.php?module=login&action=index&admin=null');
				}
				else {
					$_SESSION['login'] = $_GET['login'];
					$_SESSION['user_id'] = $resultat[0]['lup_id'];
					$_SESSION['admin'] = $resultat[0]['lup_admin'];
					header('Location:index.php?module=accueil&action=index&login_success=1');
				}
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