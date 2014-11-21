<?php
		$PARAM_hote='';
		$PARAM_port='';
		$PARAM_nom_bd='';
		$PARAM_utilisateur='';
		$PARAM_mot_passe='';
		$options = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
		$connexion = new
		
		PDO ('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe, $options);

		try {
			$connexion = new
			PDO ('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe, $options);
		}

		catch(Exeption $e) {
			echo 'Erreur : '.$e->getMessage().'<br />';
			echo 'N° : '.$e->getCode();
		}
?>