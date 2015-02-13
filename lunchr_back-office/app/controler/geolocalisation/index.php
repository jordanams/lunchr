<?php
include('../app/model/restaurants/afficher_resto2.php');







$afficher_resto2 = afficher_resto();
foreach ($afficher_resto2 as $key => $row) {

/*************CALCUL DE DISTANCE *************/
$distance = round(get_distance_m($_SESSION['Latitude_USER'], $_SESSION['Longitude_USER'], $afficher_resto2[$key]['lr_latitude'], $afficher_resto2[$key]['lr_longitude'])/1000, 3);

/******************AJOUTER LA DISTANCE CALCULE DANS CHAQUES ARRAY***************************/
array_push($afficher_resto2[$key], $distance);
}


/******************ARRAY MULTISORT POUR CLASSER DU PLUS PROCHE AU PLUS LOIN***************************/
foreach ($afficher_resto2 as $key => $row) {
    $distante_final[$key]  = $row[0];
}
array_multisort($distante_final, SORT_ASC, $afficher_resto2);

//var_dump($afficher_resto2);



	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


include('../app/view/geolocalisation/index.php'); 
?>