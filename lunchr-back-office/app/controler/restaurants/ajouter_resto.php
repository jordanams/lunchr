<?php

include('../app/model/restaurants/insert_resto.php');

	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}
	if(!isset($_FILES['ch_files']))
	{
		$avatar= "";
	}
	if(isset($_POST['nom_resto'])) {

		$insert = insert_resto( $_POST['nom_resto'], 
								$_POST['adresse_resto'], 
								$_POST['desc_resto'],
								$avatar);

		if($insert = true) {
			$last_id = $connexion->lastInsertId();
			$_SESSION['id_resto'] = $last_id;
			$notif_insert = insert_notif($_SESSION['id_resto'],2);
			
			$y=1;
				while($y < 8)
					{
						if(isset($_POST['horraire_midi_ouverture'.$y]))
							{
								$insert_horraire = insert_horraire_resto($_POST['jour'.$y],
												     $_POST['horraire_midi_ouverture'.$y],
												     $_POST['horraire_midi_fermeture'.$y],
												     $_POST['horraire_soir_ouverture'.$y],
												     $_POST['horraire_soir_fermeture'.$y],
												     $_SESSION['id_resto']);
								$y++;
							}
				}
				

			if($notif_insert = true)
			{
			header('Location:index.php?module=restaurants&action=ajouter_resto&com_success=1');
			}
			}
	}

include('../app/view/restaurants/ajouter_resto.php'); 
?>