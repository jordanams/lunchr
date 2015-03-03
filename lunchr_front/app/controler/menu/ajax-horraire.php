<?php
if(isset($_GET['alternate']) {
 
    $json = array();
    if(isset($_GET['alternate'])) {
        $id = htmlentities(intval($_GET['alternate']));
        $id_resto = htmlentities(intval($_GET['id']));
        // requête qui récupère les départements selon la région
        $requete = "SELECT HOUR(lh_open_day) as open_day, HOUR(lh_close_day) as close_day, HOUR(lh_open_night) as open_night, HOUR(lh_close_night) as close_night, lh_day  FROM lunchr_horraire as lh
WHERE lr_id = ".$id_resto." AND lh_day = ".$id."";
    }
     
    // connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=manca', 'manca', '937944');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
     
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
         for ( $heures = $donnees['open_day'] ; $heures < $donnees['close_day'] ; $heures++ ){
       for ( $minutes = 0 ; $minutes <= 45 ; $minutes += 15 ){  
              
        $json[$donnees['value']] = sprintf('%02d:%02d', $heures, $minutes);

        
       }
    }            
    }
     
    // envoi du résultat au success
    echo json_encode($json);
}
?>