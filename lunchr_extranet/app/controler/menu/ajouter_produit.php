<?php
include('../app/model/menu/select_resto.php');
include('../app/model/menu/afficher_carte.php');
include('../app/model/menu/afficher_menu.php');
include('../app/model/menu/ajouter_produit.php');


	if(isset($_GET['logout'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=login&action=index&logout=1');
		exit;
	}

if(!isset($_FILES['ch_file1']))
	{
		$avatar1= "";
	}

		if(isset($_POST['id_menu'])) {

			$insert = ajouter_produit(	$_SESSION['id_resto'],
										$_POST['id_menu'], 
										$_POST['nom_produit'],
										$_POST['prix_produit'], 
										$_POST['desc_produit'], 
										$avatar1);
			if($insert = true) {
				header('Location:index.php?module=menu&action=ajouter_produit&insert_produit=1');
			}
		}

$select_resto_afficher = select_resto_afficher($_SESSION['user_id'], $_SESSION['id_resto']);


/////////////////       LISTE CARTE / MENU LIEE          ///////////////////////////////////////////////////

if(isset($_GET['go']) || isset($_GET['id_carte'])) {
 
    $json = array();
    
    $select_resto_menu = select_resto_menu($chiffre);

    if(isset($_GET['go'])) {
        function select_resto_menu($chiffre) {
        // requête qui récupère les cartes
        $requete = "SELECT lc.lce_id, lc.lce_nom, lr.lr_id FROM lunchr_carte as lc, lunchr_restaurants as lr 
                    WHERE lr.lr_id = lc.lr_id and lr.lr_id = '65' ORDER BY lce_nom";
        }
    } 

    else if(isset($_GET['id_carte'])) {
        $id = htmlentities(intval($_GET['id_carte']));
        // requête qui récupère les menus selon la région
        $requete = "SELECT lm_id, lm_nom FROM lunchr_menu WHERE lce_id = ". $id ." ORDER BY lm_nom";
    }
     
    // connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=ns366377.ovh.net;dbname=chekroun', 'chekroun', '162162');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $resultat -> execute(array('65'=>$chiffre));
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
     
    if(isset($_GET['go']))
    {
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les carte ou les menu)
        $json[$donnees['lce_id']][] = utf8_encode($donnees['lce_nom']);
    }
}
else
{
	while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les carte ou les menu)
        $json[$donnees['lm_id']][] = utf8_encode($donnees['lm_nom']);
    }
}
     
    // envoi du résultat au success
    echo json_encode($json);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

include('../app/view/menu/ajouter_produit.php'); 
?>