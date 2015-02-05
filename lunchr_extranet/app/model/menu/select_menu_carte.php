<?php
session_name('lunchr');
session_start();
if(isset($_GET['go']) || isset($_GET['id_carte'])) {
 
    $json = array();
     
    if(isset($_GET['go'])) {
        // requête qui récupère les carte
        $requete = "SELECT lc.lce_id, lc.lce_nom, lr.lr_id FROM lunchr_carte as lc, lunchr_restaurants as lr 
                    WHERE lr.lr_id = lc.lr_id and lr.lr_id =".$_SESSION['id_resto']." ORDER BY lce_nom";
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

?>