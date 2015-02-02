<?php
	function afficher_menu($id_resto, $id_carte) {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT * 
  											 FROM lunchr_menu as lm, lunchr_carte as lc, lunchr_restaurants as lr
  											 WHERE lr.lr_id = lc.lr_id and lc.lce_id = lm.lce_id and lc.lr_id = lm.lr_id and lm.lr_id = :id_resto and lm.lce_id = :id_carte
  											 ORDER BY lm.lm_ordre");
			$select -> execute();
			$select -> execute(array('id_resto'=>$id_resto, 'id_carte'=>$id_carte));
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}


	  function ajout_mise_en_forme($id_menu_ordre, $id_menu) {

	  global $connexion;
	  	try {
	    			$query = ("	UPDATE lunchr_menu 
	    						SET
	    						lm_ordre = :id_menu_ordre
	    						WHERE lm_id = :id_menu");
	  			$curseur = $connexion->prepare($query);
	  			$curseur->bindValue(':id_menu_ordre', $id_menu_ordre, PDO::PARAM_STR);
	  			$curseur->bindValue(':id_menu', $id_menu, PDO::PARAM_STR);
	  			$retour = $curseur->execute();
	  			$curseur->closeCursor();
	  			return true;
          	}

          	catch ( Exception $e ) {
	  			die('Erreur Mysql : '.$e->getMessage());
	  		}
	  	}
?>