<?php
include_once('../../config/connect.php');
include_once('../../model/accueil/notification.php');

$new_restaurant = new_restaurant();
$reponse = array(
"liste_restaurant" => array(
"restaurant" => $new_restaurant
)
);
echo json_encode($new_restaurant);

?>