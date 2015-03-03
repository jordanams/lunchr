<?php
function select_mail($mail) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT COUNT(lu_mail) FROM lunchr_users WHERE lu_mail=:mail");

			$select->execute(array("mail" => $mail));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}

?>