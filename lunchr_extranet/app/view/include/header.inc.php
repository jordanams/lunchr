<?php
	if(!isset($_COOKIE['login']))
	{
		if(!isset($_SESSION['login']))
			{
				header('location:index.php?module=login&action=index&session=expired');
			}
	}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lunchr - Extranet</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- JQUERY UI -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/jquery-ui.structure.css" rel="stylesheet">
    <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="css/jquery-ui.theme.css" rel="stylesheet">
    <link href="css/jquery-ui.theme.min.css" rel="stylesheet">

</head>

<body>
    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDfgYPkrlOHLiZaXOghQDmTwqfLsw6byeg&sensor=false"></script>

<!-- tooltip.js -->
<script type="text/javascript">
 $(document).ready(function() {
    $(testtool).tooltip();

  });

</script>

                     <!--        NOTIFICATIONS        -->
<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////         CONNEXION / DECONNEXION        ///////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

// CONNEXION
if(isset($_GET['login_success'])) {
  
  if($_GET['login_success'] == 0) {
	   echo '<div class="alert alert-danger" role="alert">Login/Mot de passe incorrect veuillez reessayer !</div>';
  }

  if($_GET['login_success'] == 1) {
	   echo '<div class="alert alert-success" role="alert">Bonjour <b>'.$_SESSION['login'].'</b></div>';
  }
}

//DECONNEXION
if(isset($_GET['logout'])) {
  
    if($_GET['logout'] == 1) {
  	   echo '<div class="alert alert-success" role="alert">Deconnexion réussie !</div>';
  }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////         CARTE / MENU / PRODUITS / COMPTE       ///////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

// INSERTION D'UNE CARTE
if(isset($_GET['insert_carte'])) {

    if($_GET['insert_carte'] == 1) {
        echo '<div class="alert alert-success" role="alert">La carte a bien été ajouté</div>';
  }
}

// SUPPRESSION D'UNE CARTE
if(isset($_GET['supp_carte'])) {

    if($_GET['supp_carte'] == 1) {
        echo '<div class="alert alert-danger" role="alert">La carte a bien été supprimé</div>';
  }
}

// INSERTION D'UN MENU
if(isset($_GET['insert_menu'])) {

    if($_GET['insert_menu'] == 1) {
        echo '<div class="alert alert-success" role="alert">Le menu a bien été ajouté</div>';
  }
}

// SUPPRESSION D'UN MENU
if(isset($_GET['supp_menu'])) {

    if($_GET['supp_menu'] == 1) {
        echo '<div class="alert alert-danger" role="alert">Le menu a bien été supprimé</div>';
  }
}

// INSERTION D'UN PRODUIT
if(isset($_GET['insert_produit'])) {

    if($_GET['insert_produit'] == 1) {
        echo '<div class="alert alert-success" role="alert">Le produit a bien été ajouté</div>';
  }
}

// SUPPRESSION D'UN PRODUIT
if(isset($_GET['supp_produit'])) {

    if($_GET['supp_produit'] == 1) {
        echo '<div class="alert alert-danger" role="alert">Le produit a bien été supprimé</div>';
  }
}

// STOP MENU
if(isset($_GET['stop_menu'])) {

    if($_GET['stop_menu'] == 1) {
        echo '<div class="alert alert-danger" role="alert">Vous ne pouvez pas ajouter plus de huit menus par carte</div>';
  }
}

// MODIFICATION COMPTE
if(isset($_GET['update_user'])) {

    if($_GET['update_user'] == 1) {
        echo '<div class="alert alert-success" role="alert">Votre compte a bien été modifié</div>';
  }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////         COMMANDE       ///////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

// VALIDATION D'UNE COMMANDE
if(isset($_GET['commande_valide'])) {
    echo '<div class="alert alert-success" role="alert">La commande a bien été validée</div>';
}

// COMMANDE TERMINE
if(isset($_GET['commande_termine'])) {
    echo '<div class="alert alert-success" role="alert">La commande a bien été terminé</div>';
}

// COMMANDE ANNULE
if(isset($_GET['commande_annule'])) {
    echo '<div class="alert alert-danger" role="alert">La commande a bien été annulé</div>';
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
<!-- BARRE DE DEBUG -->
<?php
if(isset($_SESSION['admin'])) {
  
    if($_SESSION['admin'] == 2) {
?>
<div ALIGN=CENTER>
<button class="btn btn-info btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Debug</button>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php
	  echo "<pre>";
	echo "<<<<<<<<<< Trace \$_SESSION >>>>>>>>>><br />";
	print_r($_SESSION);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_COOKIES >>>>>>>>>><br />";
	print_r($_COOKIE);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_POST >>>>>>>>>><br />";
	print_r($_POST);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_GET >>>>>>>>>><br />";
	print_r($_GET);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_SERVER >>>>>>>>>><br />";
	print_r($_SERVER);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";

    if(isset($_GET['id']))
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace RESTAURANT >>>>>>>>>><br />";
    print_r($verif_details);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
    }

    if($_GET['module'] == 'restaurants' && $_GET['action'] == 'index')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_RESTAURANT >>>>>>>>>><br />";
    print_r($afficher_resto);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
	}
	
	if($_GET['module'] == 'geolocalisation' && $_GET['action'] == 'index')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_RESTAURANT >>>>>>>>>><br />";
    print_r($afficher_resto);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
	}

    if($_GET['module'] == 'utilisateurs' && $_GET['action'] == 'index')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_USERS_PRO >>>>>>>>>><br />";
    print_r($afficher_users);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
    }

    if($_GET['module'] == 'utilisateurs' && $_GET['action'] == 'afficher_users')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_USERS >>>>>>>>>><br />";
    print_r($afficher_users);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
    }

	?>

    </div>
  </div>
</div>
<?php
	}
}
?>


    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?module=accueil&action=index"><img id="logo" width="75" src="images/logo.png"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <a><?php echo $_SESSION['login']; ?></a>
                <li id="testtool" data-toggle="tooltip" title="Nouveaux restaurants" data-placement="top"  class="dropdown">
                    
                    
                    

                    <!-- /.dropdown-alerts -->
                </li>

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['login']; ?></a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="index.php?module=accueil&action=index&logout=1"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <?php if(isset($_SESSION['resto_actif_valid'])) { echo '<input type="text" id="search" class="form-control" placeholder="Search...">
                                <h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		                          <ul id="results"></ul>
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>';}?>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <?php if(isset($_SESSION['resto_actif_valid'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='accueil') { echo' class="active"'; }  echo 'href="index.php?module=accueil&action=index"> <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>';
                        echo'</li>';}?>

                        <?php if(isset($_SESSION['resto_actif_valid'],$_SESSION['id_resto'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='changer_resto') { echo'<a class="active"'; } echo 'href="index.php?module=changer_resto&action=changer_resto"><i class="fa fa-cog"></i> Administrer un autre restaurant</a>';
                        echo'</li>';}?>

                        <?php if(isset($_SESSION['resto_actif_valid'],$_SESSION['id_resto'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='menu') { echo'<a class="active"'; } echo 'href="index.php?module=menu&action=index"><i class="fa fa-list"></i> Liste des cartes / menus</a>';
                        echo'</li>';}?>

                        <?php if(isset($_SESSION['resto_actif_valid'],$_SESSION['id_resto'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='quantites-produits') { echo'<a class="active"'; } echo 'href="index.php?module=quantites-produits&action=index"><i class="fa fa-list"></i> Ajouter les quantités de produits</a>';
                        echo'</li>';}?>

                        <?php if(isset($_SESSION['resto_actif_valid'],$_SESSION['id_resto'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='commandes') { echo'<a class="active"'; } echo 'href="index.php?module=commandes&action=index"><i class="fa fa-list"></i> Liste des commandes</a>';
                        echo '</li>';}?>

                        <?php if(isset($_SESSION['resto_actif_valid'],$_SESSION['id_resto'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='clients') { echo'<a class="active"'; } echo 'href="index.php?module=clients&action=index"><i class="fa fa-list"></i> Liste des clients</a>';
                        echo '</li>';}?>


                        <!-- RESTO VALID / FIRST RESTO / RESTO EN ATTENTE -->

                        <?php if(($_SESSION['resto_actif_attente']) == 0) {

                            if(isset($_SESSION['resto_actif_valid'])) {
                            echo '<li>';
                                echo'<a '; if($_GET['module']=='restaurant') { echo' class="active"'; } echo 'href="index.php?module=restaurant&action=liste_restaurant"><i class="fa fa-cog"></i> Restaurant</a>';
                            echo '</li>';}

                            else {
                            echo '<li>';
                                echo'<a '; if($_GET['module']=='restaurant') { echo' class="active"'; } echo 'href="index.php?module=restaurant&action=first_resto"><i class="fa fa-cog"></i> Restaurant</a>';
                            echo '</li>';}
                        }?>

                        <!---_______________________________________________-->

                        <?php if(isset($_SESSION['resto_actif_valid'])) {
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='compte') { echo'<a class="active"'; } echo 'href="index.php?module=compte&action=index"><i class="fa fa-cog"></i> Compte</a>';
                        echo '</li>';}?>

                        <?php  
                        echo '<li>';
                            echo'<a '; if($_GET['module']=='nous-contacter') { echo' class="active"'; } echo 'href="index.php?module=nous-contacter&action=index"><i class="fa fa-home"></i> Nous contacter</a>';
                        echo '</li>';
                        ?>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>    <!-- Button trigger modal -->





        <div id="page-wrapper">
            <div class="row">