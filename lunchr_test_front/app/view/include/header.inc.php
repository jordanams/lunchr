<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<meta charset="utf-8"/>
<title>LunchR</title>
<meta name="google-site-verification" content="U6PbqhHPt54YXW59rMl_QS5QQV9np_PP6yb2Q6VN1PA" />
<link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- JQUERY UI -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/jquery-ui.structure.css" rel="stylesheet">
    <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="css/jquery-ui.theme.css" rel="stylesheet">
    <link href="css/jquery-ui.theme.min.css" rel="stylesheet">
</head>
<body>
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
             <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
               <script src="http://maps.google.com/maps/api/js?key=AIzaSyDfgYPkrlOHLiZaXOghQDmTwqfLsw6byeg&sensor=false"></script>
            
            <script src="js/jquery.ui.addresspicker.js"></script>
<section class="section header header_fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 resp_logo">
                <a href="index.php?module=accueil&action=index" onClick="ga('send', 'event', 'button', 'logo', 'home', 'clic');">
                    <img alt="logo lunchr" class="logo" src="img/new_logo.png">
                </a>
                <a alt="mon compte" class="compte_icone_resp" href="#"><span class="fa fa-user"></span></a>   
                <a href="#">
                    <div class="panier_resp">
                        <span class="pull-left price_resp">Cart</span>
                        <i class="pull-right panier_icon_resp fa fa-shopping-cart"></i>
                    </div>
                </a>
            </div>
            <form class="form-inline col-lg-8 col-md-7 col-sm-6 col-xs-12 text-center" role="form" method='post'>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="sr-only" for="form">Search</label>
                    <input class="search_div_header form-control" type="text" name="search" placeholder="Search (Restaurant, Town, Adress...)" />
                </div>
                <a href="#" class="color_principal" onClick="ga('send', 'event', 'search', 'clic');">
                    <input type="submit" class="search_div_header btn btn-danger bouton_search" value="Search"> <a href="#" onClick="ga('send', 'event', 'button','search_ficherestaurant', 'clic');"value="Search"/>
                </a>
               <!-- <a href="#" class="bck_around_me fa fa-map-marker"></a> -->
            </form>
<?php
if(!isset($_SESSION['login']))
{
?>
            <div class="section_connection col-lg-2 col-md-3 col-sm-3 col-xs-4">
                <div class="pull-right">
                    <div id="form-login" class="popover-markup btn no_pad">
                        <button data-placement="bottom" data-toggle="popover" class="color_principal button_log button_style font_open_sansbold trigger">Log in</button> 
                        <button class="button_register button_style font_open_sansbold" data-toggle="modal" data-target=".bs-example-modal-lg" onClick="ga('send', 'event', 'button', 'sign-up', 'log', 'clic');">Register</button>
                    </div>
                    <div class="slide_toogle_login pull_absolute">
                        <div class="text-center already_account">Si vous avez déjà un compte</div>
                        <div class="facebook_connect_bloc">
                            <a href="#" class="log_facebook col-lg-12">
                                <span class="no_pad icon_facebook_popup fa fa-facebook-square"></span>
                                <span class="text-center">Connect with facebook</span>
                            </a>
                        </div>
                        <span class="col-lg-12 col-md-12 col-sm-12 text-center or_bloc">Or</span> 
                        <div class="form_connect_login">
                            <form>
                            <input id="login" name="login" class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" type="text" placeholder="Email">
                            <input id="password" name="password" class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" type="password" placeholder="Password">
                            <label class="no_pad remember_password col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" name="remember_password"><input type="checkbox" class="checkbox_remember_me" name="remember_password" value="Remember me">Remember me</label>
                            <a href="#" class="no_pad forgot_password col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">You forgot your password ?</a>
                            <button type="submit" class="col-lg-10 col-lg-offset-1 connexion_login" value="connexion">Connexion</button>

                           </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Large modal -->
    <div class="modal fade bs-example-modal-lg" id="mymodal_register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content col-lg-12 col-md-12 col-sm-12">
                <button type="button" class="close close_absolute" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="col-lg-6 col-sm-6 col-md-6 lightbox_part_left padding_lightbox border_mid text-center">
                    <h1 class="font_open_sansbold">Are you a Professional ?</h1>
                    <span class="col-lg-12">You want to register your restaurant <br/>in our platform</span><br/>
                    <div class="marg_register col-lg-12"><a href="index.php?module=register_pro&action=register_pro" class="button_style register_button font_open_sansbold">Register as a pro</a></div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 lightbox_part_right padding_lightbox text-center">
                    <h1 class="font_open_sansbold">Are you a client ?</h1>
                    <span class="col-lg-12">You want to register as <br/>a simple client</span><br/>
                    <div class="marg_register col-lg-12"><a href="index.php?module=login&action=login" class="button_style register_button font_open_sansbold">Register as a client</a></div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
else
{
	//echo"Bonjour".$_SESSION['login']."";
	echo "<div class='pull-right'>
			<button class='button_register button_style font_open_sansbold'>My account</button>
			<a class='logout' href='index.php?logout=1'>Logout</a>
		</div>";
}
?>
    <!-- Large modal -->
</section>