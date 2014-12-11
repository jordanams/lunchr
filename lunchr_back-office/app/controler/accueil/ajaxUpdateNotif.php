<?php
include_once('../../config/connect.php');
include_once('../../model/accueil/notification.php');


$update = update_notifications($_GET['type']);
?>