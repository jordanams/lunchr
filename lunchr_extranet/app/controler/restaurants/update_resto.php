<?php
include('../app/model/restaurants/update_resto.php');
include('../app/model/restaurants/details_resto.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

$verif_details = verif_details($_GET['id']);
	

		if($_SESSION['restaurants_image_1'] == "") {
			$avatar1= "";
		}
		else {
			$avatar1=$_SESSION['restaurants_image_1'];
		}
	

		if($_SESSION['restaurants_image_2'] == "") {
			$avatar2= "";
		}
		else {
			$avatar2=$_SESSION['restaurants_image_2'];
		}
	

		if($_SESSION['restaurants_image_3'] == "") {
			$avatar3= "";
		}
		else {
			$avatar3=$_SESSION['restaurants_image_3'];
		}
	

		if($_SESSION['restaurants_image_4'] == "") {
			$avatar4= "";
		}
		else {
			$avatar4=$_SESSION['restaurants_image_4'];
		}
	
	if(isset($_POST['nom_resto'])) {

		$update = update_resto( $_POST['nom_resto'], 
								$_POST['adresse_resto'],
								$_POST['longitude'],
								$_POST['latitude'],
								$_POST['pays'],
								$_POST['ville'],
								$_POST['code_postal'], 
								$_POST['desc_resto'],
								$avatar1,
								$avatar2,
								$avatar3,
								$avatar4,
								$_GET['id']);

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
												     $_GET['id']);
								$y++;
							}
				}

				if($update_horraire = true) {
					header('Location:index.php?module=restaurants&action=index&com_success_update_resto=1');
				}
			}
	}

include('../app/view/restaurants/update_resto.php'); 
?>