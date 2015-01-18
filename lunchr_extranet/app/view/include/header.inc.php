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
//////////////////         RESTAURANTS        ///////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

// INSERTION DE RESTAURANT
if(isset($_GET['com_success_resto'])) {

    if($_GET['com_success_resto'] == 1) {
        echo '<div class="alert alert-success" role="alert">Le restaurant a été ajouté</div>';
  }
}

// SUPPRESSION DE RESTAURANT
if(isset($_GET['supp_resto'])) {

    if($_GET['supp_resto'] == 1) {
        echo '<div class="alert alert-success" role="alert">Le restaurant a été supprimé</div>';
  }
}

// MODIFICATION DE RESTAURANT
if(isset($_GET['com_success_update_resto'])) {

    if($_GET['com_success_update_resto'] == 1) {
        echo '<div class="alert alert-success" role="alert">Le restaurant a été modifié</div>';
  }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////         UTILISATEURS        ///////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

// INSERTION D'UTILISATEUR PRO
if(isset($_GET['insert_users_pro'])) {

    if($_GET['insert_users_pro'] == 1) {
        echo '<div class="alert alert-success" role="alert">L\'utilisateur pro a été ajouté</div>';
  }
}

// INSERTION D'UTILISATEUR
if(isset($_GET['insert_users'])) {

    if($_GET['insert_users'] == 1) {
        echo '<div class="alert alert-success" role="alert">L\'utilisateur a été ajouté</div>';
  }
}

// SUPPRESSION D'UTILISATEUR PRO
if(isset($_GET['supp_users_pro'])) {

    if($_GET['supp_users_pro'] == 1) {
        echo '<div class="alert alert-success" role="alert">L\'utilisateur pro a été supprimé</div>';
  }
}

// SUPPRESSION D'UTILISATEUR
if(isset($_GET['supp_users'])) {

    if($_GET['supp_users'] == 1) {
        echo '<div class="alert alert-success" role="alert">L\'utilisateur a été supprimé</div>';
  }
}

// MODIFICATION D'UTILISATEUR PRO
if(isset($_GET['update_users_pro'])) {

    if($_GET['update_users_pro'] == 1) {
        echo '<div class="alert alert-success" role="alert">L\'utilisateur pro a été modifié</div>';
  }
}

// MODIFICATION D'UTILISATEUR
if(isset($_GET['update_users'])) {

    if($_GET['update_users'] == 1) {
        echo '<div class="alert alert-success" role="alert">L\'utilisateur a été modifié</div>';
  }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
<!-- BARRE DE DEBUG -->
<?php
if(isset($_SESSION['admin'])) {
  
    if($_SESSION['admin'] == 2) {
?>
<button class="btn btn-info btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Debug</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php
	  echo "<pre>";
	echo "<<<<<<<<<< Trace \$_SESSION >>>>>>>>>><br />";
	var_dump($_SESSION);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_COOKIES >>>>>>>>>><br />";
	var_dump($_COOKIE);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_POST >>>>>>>>>><br />";
	var_dump($_POST);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_GET >>>>>>>>>><br />";
	var_dump($_GET);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_SERVER >>>>>>>>>><br />";
	var_dump($_SERVER);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";

    if(isset($_GET['id']))
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace RESTAURANT >>>>>>>>>><br />";
    var_dump($verif_details);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
    }

    if($_GET['module'] == 'restaurants' && $_GET['action'] == 'index')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_RESTAURANT >>>>>>>>>><br />";
    var_dump($afficher_resto);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
	}
	
	if($_GET['module'] == 'geolocalisation' && $_GET['action'] == 'index')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_RESTAURANT >>>>>>>>>><br />";
    var_dump($afficher_resto);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
	}

    if($_GET['module'] == 'utilisateurs' && $_GET['action'] == 'index')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_USERS_PRO >>>>>>>>>><br />";
    var_dump($afficher_users);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
    }

    if($_GET['module'] == 'utilisateurs' && $_GET['action'] == 'afficher_users')
    {
    echo "<pre>";
    echo "<<<<<<<<<< Trace LISTE_USERS >>>>>>>>>><br />";
    var_dump($afficher_users);
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";
    }

    echo "<pre>";
    echo "<<<<<<<<<< Trace POSITION >>>>>>>>>><br />";
    echo "<div id='infoposition'></div>";
    echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
    echo "</pre>";

	  ?>

    </div>
  </div>
</div>
<a href="../app/view/tools/APIGEN_RESULTAT">Apigen (Liste des fonctions)</a>
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
                
                <li id="testtool" data-toggle="tooltip" title="Nouveaux restaurants" data-placement="top"  class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <span id="count_notif"></span> <i class="fa fa-caret-down"></i>
                        
                    </a>
                    
                    
                    
                                 <!-- /.AJAX COUNT NOTIFS -->
                <script type="text/javascript">
                var i = 0;
                function init(){
   loop();
}
function loop(){
					function traiterFlux(flux) {
							contenu = "";
							$.each(flux, function(key,value) {
								if(value > 0) {
								contenu += "<b class='red'>"+value+"</b>";
								}
								else
								{
								contenu += "<b>"+value+"</b>";	
								}
								});
								$(count_notif).html(contenu);	
								}
								
					function traiterFlux2(flux) {
							contenu = "";
							$.each(flux, function(index,entry) {                       
                        contenu += "<li><a href='index.php?module=restaurants&action=details_resto&id="+entry.lr_id+"'><i class='fa fa-cutlery'> Nouveau restaurant : <div><b>"+entry.lr_nom+"</b></div></i></a></li><li class='divider'></li>";
								});
								$(new_resto).html(contenu);	
								}

					$(document).ready(function() {
					$.ajax({
							url:'../app/controler/accueil/ajaxController.php',
							type:'post',
							data:$(this).serialize(),
							dataType:'json',
							success: function(data) {
									console.log(data);
									traiterFlux(data.count_notif);
									traiterFlux2(data.liste_restaurant.restaurant);

													},
							error: function(jqXHR, textStatus, errorThrown) {
								console.log("erreur execution requete ajax!");
								
							}
						
						});
						});
}
setInterval('loop();',1000);
init();

				$(testtool).click(function() {
								$.ajax({
					          url: '../app/controler/accueil/ajaxUpdateNotif.php?type=2',
					          method: 'POST',
					          data: {},
					          success: function() {
					          },
					          error: function(jqXHR, textStatus, errorThrown) {
								console.log("erreur execution requete ajax!");
								}
					        });
					        });
					</script>
                    
                    
                    
                    <ul id="new_resto" class="dropdown-menu dropdown-alerts">
                       

   
                     </ul>
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
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                                <h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		                          <ul id="results"></ul>
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a <?php if($_GET['module']=='accueil') { echo' class="active"'; } ?> href="index.php?module=accueil&action=index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a <?php if($_GET['module']=='menu') { echo' class="active"'; } ?> href="index.php?module=menu&action=index"><i class="fa fa-list"></i> Liste des cartes / menus</a>
                        </li>
                        <li>
                            <a <?php if($_GET['module']=='commandes') { echo' class="active"'; } ?> href="index.php?module=commandes&action=index"><i class="fa fa-list"></i> Liste des commandes</a>
                        </li>
                        <li>
                            <a <?php if($_GET['module']=='clients') { echo' class="active"'; } ?> href="index.php?module=clients&action=index"><i class="fa fa-list"></i> Liste des clients</a>
                        </li>
                        <li>
                            <a <?php if($_GET['module']=='restaurants') { echo' class="active"'; } ?> href="index.php?module=restaurants&action=index"><i class="fa fa-cog"></i> Restaurant</a>
                        </li>
                        <li>
                            <a <?php if($_GET['module']=='compte') { echo' class="active"'; } ?> href="index.php?module=compte&action=index"><i class="fa fa-cog"></i> Compte</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>    <!-- Button trigger modal -->





        <div id="page-wrapper">
            <div class="row">