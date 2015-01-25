<?php
include('../app/model/menu/select_resto.php');
// include('../app/model/menu/afficher_carte.php');
// include('../app/model/menu/afficher_menu.php');


	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);


/////////////////       LISTE CARTE / MENU LIEE          ///////////////////////////////////////////////////

if(isset($_GET['go']) || isset($_GET['id_carte'])) {
 
    $json = array();
     
    if(isset($_GET['go'])) {
        // requête qui récupère les carte
        $requete = "SELECT lce_id, lce_nom FROM lunchr_carte ORDER BY lce_nom";
    } else if(isset($_GET['id_carte'])) {
        $id = htmlentities(intval($_GET['id_carte']));
        // requête qui récupère les menu selon la région
        $requete = "SELECT lm_id, lm_nom FROM lunchr_menu WHERE lce_id = ". $id ." ORDER BY lm_nom";
    }
     
    // connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=ns366377.ovh.net;dbname=chekroun', 'chekroun', '162162');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
     
    if(isset($_GET['go']))
    {
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les carte ou les menu)
        $json[$donnees['lce_id']][] = utf8_encode($donnees['lce_nom']);
    }
}
else
{
	while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les carte ou les menu)
        $json[$donnees['lm_id']][] = utf8_encode($donnees['lm_nom']);
    }
}
     
    // envoi du résultat au success
    echo json_encode($json);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

include('../app/view/menu/mise_en_forme.php'); 
?>