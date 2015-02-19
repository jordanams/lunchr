<?php
include('../app/model/restaurant/update_resto.php');
include('../app/model/restaurant/details_resto.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$verif_details = verif_details($_GET['id_resto']);


	if(isset($_POST['desc_resto'])) {

		if($_SESSION['restaurant_image_1'] == "") {$avatar1= "";}
		else {$avatar1=$_SESSION['restaurant_image_1'];}
		
		if($_SESSION['restaurant_image_2'] == "") {$avatar2= "";}
		else {$avatar2=$_SESSION['restaurant_image_2'];}

		if($_SESSION['restaurant_image_3'] == "") {$avatar3= "";}
		else {$avatar3=$_SESSION['restaurant_image_3'];}

		if($_SESSION['restaurant_image_4'] == "") {$avatar4= "";}
		else {$avatar4=$_SESSION['restaurant_image_4'];}

		$update = update_resto( $_POST['desc_resto'],
								$avatar1,
								$avatar2,
								$avatar3,
								$avatar4,
								$_GET['id_resto']);

		if($update = true) {
			$last_id = $connexion->lastInsertId();
			$_SESSION['id_resto'] = $last_id;
			$y=1;
				while($y < 8)
					{
						if(isset($_POST['horraire_midi_ouverture'.$y]))
							{
								$update_horraire = update_horraire_resto($_POST['jour'.$y],
												     $_POST['horraire_midi_ouverture'.$y],
												     $_POST['horraire_midi_fermeture'.$y],
												     $_POST['horraire_soir_ouverture'.$y],
												     $_POST['horraire_soir_fermeture'.$y],
												     $_GET['id_resto']);
								$y++;
							}
				}

				if($update_horraire = true) {
					header('Location:index.php?module=restaurant&action=liste_restaurant&update_resto=1');
				}
			}
	}

include('../app/view/restaurant/update_resto.php'); 
?>