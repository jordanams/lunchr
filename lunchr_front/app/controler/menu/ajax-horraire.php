<?php
if(isset($_GET['alternate']) {
 
    $json = array();
    if(isset($_GET['alternate'])) {
        $id = htmlentities(intval($_GET['alternate']));
        $id_resto = htmlentities(intval($_GET['id']));
        // requ�te qui r�cup�re les d�partements selon la r�gion
        $requete = "SELECT HOUR(lh_open_day) as open_day, HOUR(lh_close_day) as close_day, HOUR(lh_open_night) as open_night, HOUR(lh_close_night) as close_night, lh_day  FROM lunchr_horraire as lh
WHERE lr_id = ".$id_resto." AND lh_day = ".$id."";
    }
     
    // connexion � la base de donn�es
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=manca', 'manca', '937944');
    } catch(Exception $e) {
        exit('Impossible de se connecter � la base de donn�es.');
    }
    // ex�cution de la requ�te
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
     
    // r�sultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les r�gions ou les d�partements)
         for ( $heures = $donnees['open_day'] ; $heures < $donnees['close_day'] ; $heures++ ){
       for ( $minutes = 0 ; $minutes <= 45 ; $minutes += 15 ){  
              
        $json[$donnees['value']] = sprintf('%02d:%02d', $heures, $minutes);

        
       }
    }            
    }
     
    // envoi du r�sultat au success
    echo json_encode($json);
}
?>