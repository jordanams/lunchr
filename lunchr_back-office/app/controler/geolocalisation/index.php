<?php
include('../app/model/restaurants/afficher_resto2.php');

$afficher_resto2 = afficher_resto();
$y=0;
foreach ($afficher_resto2[$y] as $key => $row) {
$distance = round(get_distance_m($_SESSION['Latitude_USER'], $_SESSION['Longitude_USER'], $afficher_resto2[$y]['lr_latitude'], $afficher_resto2[$y]['lr_longitude'])/1000, 3);
array_push($afficher_resto2[$y], $distance);
$y++;
}
foreach ($afficher_resto2 as $key => $row) {
    $distante_final[$key]  = $row[0];
}
array_multisort($distante_final, SORT_ASC, $afficher_resto2);


//var_dump($afficher_resto2);

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


include('../app/view/geolocalisation/index.php'); 
?>