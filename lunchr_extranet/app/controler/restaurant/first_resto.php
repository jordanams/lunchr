<?php
include('../app/model/restaurant/select_resto.php');
include('../app/model/restaurant/insert_resto.php');

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}


	if(isset($_POST['desc_resto'])) {

	if(!isset($_FILES['ch_files1'])) {$avatar1= "";}
	if(!isset($_FILES['ch_files2'])) {$avatar2= "";}
	if(!isset($_FILES['ch_files3'])) {$avatar3= "";}
	if(!isset($_FILES['ch_files4'])) {$avatar4= "";}

		$insert = insert_resto( $_POST['desc_resto'],
								$avatar1,
								$avatar2,
								$avatar3,
								$avatar4,
								$_SESSION['id_resto']);

			if ($insert = true) {

			$last_id = $connexion->lastInsertId();
			$_SESSION['id_resto'] = $last_id;
			$notif_insert = insert_notif($_SESSION['id_resto'],2);
			
			$y=1;
				while($y < 8)
					{
						if(isset($_POST['horraire_midi_ouverture'.$y]))
							{
								$insert_horraire = 	insert_horraire_resto($_POST['jour'.$y],
												   	$_POST['horraire_midi_ouverture'.$y],
												    $_POST['horraire_midi_fermeture'.$y],
												    $_POST['horraire_soir_ouverture'.$y],
												    $_POST['horraire_soir_fermeture'.$y],
												    $_SESSION['id_resto']);
								$y++;
							}
					}
				

			if ($notif_insert = true) {
				$attente = $_SESSION['resto_actif_attente'] = $_SESSION['resto_actif_attente']+1;
				header('Location:index.php?module=restaurant&action=attente_actif');
			}
			else {
				echo'ne marche pas';
			}
		}
	}

$select_resto = select_resto($_SESSION['user_id']);

include('../app/view/restaurant/first_resto.php'); 
?>