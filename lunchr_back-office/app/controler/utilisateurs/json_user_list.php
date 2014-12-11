<?php
include_once('../../config/connect.php');
include_once('../../model/accueil/afficher_users.php');

$users = afficher_users();
$reponse = array(
"liste_users" => array(
"users" => $users
)
);
echo json_encode($users);

?>