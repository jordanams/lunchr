<?php
include_once('../../config/connect.php');
include_once('../../model/accueil/notification.php');

$notifications = verif_count_notif();
$count_notifs = count($notifications);
$new_restaurant = new_restaurant();
//echo $count_notifs;
$reponse = array(
"count_notif" => array(
"data1" => $count_notifs
),
"liste_restaurant" => array(
"restaurant" => $new_restaurant
)
);
echo json_encode($reponse);
?>