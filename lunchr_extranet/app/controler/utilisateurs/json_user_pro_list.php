<?php
include_once('../../config/connect.php');
include_once('../../model/utilisateurs/afficher_users_pro.php');

$users_pro = afficher_users_pro();
$reponse = array(
"liste_users" => array(
"users" => $users_pro
)
);
echo json_encode($users_pro);

?>