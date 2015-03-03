<?php
include_once('../../config/connect.php');
include_once('../../model/accueil/login.php');

$user = verif_user($_POST['login'], $_POST['password']);

//echo $count_notifs;
$reponse = array(
"data1" => $user
)
);
echo json_encode($reponse);
?>