<?php
function verif_user($login, $password) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * 
										   FROM lunchr_users_pro as lup, lunchr_restaurants as lr
										   WHERE lup.lup_mail=:login 
										   and lup.lup_password=:password 
										   and lup.lup_id = lr.lup_id");

			$select->execute(array("login"=>$login, "password"=>$password));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			//var_dump($resultat);
			//die();
			$count = count($resultat);


			if($count == 1) {
				if($resultat[0]['lr_actif'] == 0){
					header('Location:index.php?module=login&action=index&admin=null');
				}
				else {
					$_SESSION['login'] = $_GET['login'];
					$_SESSION['admin'] = $resultat[0]['lup_admin'];
					//$_SESSION['resto'] = $resultat[0]['lr_id'];
					$_SESSION['resto_actif'] = $resultat[0]['lr_actif'];
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