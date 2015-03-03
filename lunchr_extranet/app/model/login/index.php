<?php
function verif_user($login, $password) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * 
										   FROM lunchr_users_pro as lup, lunchr_restaurants as lr
										   WHERE lup.lup_mail=:login and lup.lup_password=:password and lr.lup_id = lup.lup_id");

			$select->execute(array("login"=>$login, "password"=>$password));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			//var_dump($resultat);
			//die();
			$count = count($resultat);


			if($count == true) {


				if ($resultat[0]['lup_actif'] == 0) {
					header('Location:index.php?module=login&action=index&admin=null');
				}

				else {
						if ($resultat[0]['lr_actif_valid'] == 0) {
							if ($resultat[0]['lr_actif_attente'] == 0) {
								$_SESSION['login'] = $_GET['login'];
								$_SESSION['user_id'] = $resultat[0]['lup_id'];
								$_SESSION['admin'] = $resultat[0]['lup_admin'];
								$_SESSION['id_resto'] = $resultat[0]['lr_id'];
								$_SESSION['resto_actif_attente'] = $resultat[0]['lr_actif_attente'];
								header('Location:index.php?module=restaurant&action=first_resto');
							}
							else {
								$_SESSION['login'] = $_GET['login'];
								$_SESSION['user_id'] = $resultat[0]['lup_id'];
								$_SESSION['admin'] = $resultat[0]['lup_admin'];
								$_SESSION['resto_actif_attente'] = $resultat[0]['lr_actif_attente'];
								header('Location:index.php?module=restaurant&action=attente_actif');
							}
						}

						else if ($resultat[0]['lr_actif_valid'] == 1) {
							$_SESSION['login'] = $_GET['login'];
							$_SESSION['user_id'] = $resultat[0]['lup_id'];
							$_SESSION['admin'] = $resultat[0]['lup_admin'];
							$_SESSION['resto_actif_valid'] = $resultat[0]['lr_actif_valid'];
							$_SESSION['resto_actif_attente'] = $resultat[0]['lr_actif_attente'];
							header('Location:index.php?module=accueil&action=index&login_success=1');
						}

						else if ($resultat[0]['lr_actif_valid'] == 2) {
							$_SESSION['login'] = $_GET['login'];
							$_SESSION['user_id'] = $resultat[0]['lup_id'];
							$_SESSION['admin'] = $resultat[0]['lup_admin'];
							$_SESSION['resto_actif_valid'] = $resultat[0]['lr_actif_valid'];
							$_SESSION['resto_actif_attente'] = $resultat[0]['lr_actif_attente'];
							header('Location:index.php?module=accueil&action=index&login_success=1');
						}
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