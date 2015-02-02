<?php
function detail_restaurant($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT * FROM lunchr_restaurants 
WHERE 
lr_id = :id");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}




function select_carte($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT lc.lce_id
FROM lunchr_carte as lc, lunchr_restaurants as lr
WHERE
lc.lr_id = lr.lr_id 
AND
lr.lr_id = :id
AND 
lc.lce_actif = 1");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function select_menu($id) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT lm_nom, lm_id, lm_ordre
FROM lunchr_carte as lc, lunchr_menu as lm
WHERE
lc.lce_id = lm.lce_id
AND
lc.lce_id = :id
ORDER BY lm.lm_ordre
");

			$select->execute(array("id" => $id));
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
			
		}
	
	catch ( Exception $e ) {
	return false;
	}
}


function select_produits($id, $menu) {
	
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT *
FROM lunchr_menu as lm
LEFT JOIN lunchr_produits as lp ON lp.lm_id = lm.lm_id
WHERE
lm.lce_id = :id
AND lm.lm_id = :menu
ORDER BY lm.lm_ordre");

			$select->execute(array("id" => $id, "menu" => $menu));
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
