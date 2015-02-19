<?php

$PARAM_hote='localhost';
$PARAM_port='3306';
$PARAM_nom_bd='amsalem';
$PARAM_utilisateur='amsalem';
$PARAM_mot_passe='827537';
$connexion = new
PDO ('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);


try
{
	$connexion = new
PDO ('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
}

catch(Exeption $e)
{
	
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode();
	
}


?>