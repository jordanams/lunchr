<?php
include_once('../../config/connect.php');
include_once('../../config/secu_session.php');
my_session_start ();
include_once('../../model/accueil/index.php');
$verif_user = verif_user($_POST['login'], md5($_POST['password']));
echo $verif_user;
?>