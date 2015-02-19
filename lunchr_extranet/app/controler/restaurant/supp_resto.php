<?php

	if(isset($_GET['id_resto'])) {
		
		include('../app/model/restaurant/supp_resto.php');

		if($delete = true) {
			supp_resto($_GET['id_resto']);
			header('Location:index.php?module=restaurant&action=attente_supp');
		}
	}

include('../app/view/restaurant/liste_restaurant.php'); 
?>