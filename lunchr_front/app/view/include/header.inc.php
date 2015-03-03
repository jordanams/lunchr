<?php $_SESSION['module'] = $_GET['module']; ?>
<?php $_SESSION['action'] = $_GET['action']; ?>
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
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDfgYPkrlOHLiZaXOghQDmTwqfLsw6byeg&sensor=false"></script>            
<script src="js/jquery.ui.addresspicker.js"></script>
<!-- DEBUT forgot password Large modal -->
<div class="modal fade forgot_password_modal_sm" id="mymodal_forgotpassword" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="text-center new_password_content modal-content col-lg-12 col-sm-12 col-sm-12">
            <button type="button" class="close close_absolute" data-dismiss="modal" aria-hidden="true">×</button>
            <h2 class="text-center font_open_sansbold">You forgot your password ?</h2>
            <p class="text-center">Don’t worry ! <br/>Enter the email address linked to your LunchR account to receive a new password. <br/>Send me a new password</p>
            <input type="text" placeholder='Enter your email'>
            <button class="btn btn-danger new_password_button">I get a new password</button>
        </div>
    </div>
</div>
<!-- FIN forgot password Large modal -->
<section class="section header header_fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 resp_logo">
                <a href="index.php?module=accueil&action=index" onClick="ga('send', 'event', 'button', 'logo', 'home', 'clic');">
                    <img alt="logo lunchr" class="logo" src="img/new_logo.png">
                </a>
                <a alt="mon compte" class="compte_icone_resp" data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><span class="fa fa-user"></span></a>   
                <a href="#">
                    <div class="panier_resp">
                        <span class="pull-right panier_icon_resp fa fa-shopping-cart"></span>
                    </div>
                </a>
            </div>
            <form class="form-inline col-lg-8 col-md-7 col-sm-6 col-xs-12 text-center" role="form" method='post'>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="sr-only" for="form">Search</label>
                    <input class="search_div_header form-control" type="text" name="search" placeholder="Search (Restaurant, Town, Adress...)" />
                </div>
                <a href="#" class="color_principal">
                    <input type="submit" class="search_div_header btn btn-danger bouton_search" value="Search"> <a href="#" onClick="ga('send', 'event', 'button','search_ficherestaurant', 'clic');"value="Search"/>
                </a>
               <!-- <a href="#" class="bck_around_me fa fa-map-marker"></a> -->
            </form>

            <div class="section_connection col-lg-2 col-md-3 col-sm-3 col-xs-4">
                <div class="pull-right">
<?php 
if(!empty($_SESSION['panier']))
{
?>
                    <div id="form-login" class="popover-markup btn no_pad">
                        <a href="index.php?module=summary&action=summary"><div class="cart_header2 fa fa-shopping-cart"></div></a>
<?php
}
?>
                        <?php
if(!isset($_SESSION['login']))
{
?>
                        <button data-placement="bottom" data-toggle="popover" class="color_principal button_log button_style font_open_sansbold trigger">Log in</button> 
                        <button class="button_register button_style font_open_sansbold" data-toggle="modal" data-target=".bs-example-modal-lg" onClick="ga('send', 'event', 'button', 'sign-up', 'log', 'clic');">Register</button>
                    </div>
                    <div class="slide_toogle_login pull_absolute">
                        <div class="text-center already_account">If you already have an account</div>
                       <!--
 <div class="facebook_connect_bloc">
                            <a href="#" class="log_facebook col-lg-12">
                                <span class="no_pad icon_facebook_popup fa fa-facebook-square"></span>
                                <span class="text-center">Connect with facebook</span>
                            </a>
                        </div>
-->
                        <!--<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true">Connectez-vous avec Facebook !</div>-->
                        <span class="col-lg-12 col-md-12 col-sm-12 text-center or_bloc"></span> 
                        <div class="form_connect_login">
                        <span class="login_result"></span>
                           <!--  <form> -->
                            <input id="login" type="email" name="login" class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" type="text" placeholder="Email" >
                            <input id="password" name="password" class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" type="password" placeholder="Password">
                            <label class="no_pad remember_password col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" name="remember_password"><!-- <input type="checkbox" class="checkbox_remember_me" name="remember_password" value="Remember me">Remember me</label> -->
                          <!--   <a href="#" class="no_pad forgot_password col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" data-toggle="modal" data-target=".forgot_password_modal_sm">You forgot your password ?</a> -->
                            <button  class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 connexion_login">Connexion</button>                           <!--  </form> --> 
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
			<button class='button_register button_style2 font_open_sansbold'><a class='my_account_button' href='index.php?module=account&action=account'>My account</a></button>
			<a class='logout' href='index.php?logout=1'>Logout</a>
		</div>";
}
?>
    <!-- Large modal -->
</section>
<script>
$(document).ready(function(){
	$('#username').focus(); // Focus to the username field on body loads
	$('.connexion_login').click(function(){ // Create `click` event function for login
		var username = $('#login'); // Get the username field
		var module = '<?php echo $_GET['module']; ?>';
		var action = '<?php echo $_GET['action']; ?>';
		var id_resto = '<?php echo $_SESSION['restaurant']; ?>';
		var password = $('#password'); // Get the password field
		/* var remember = $('#remember'); // Get the remember field */
		var login_result = $('.login_result'); // Get the login result div
		login_result.html('loading..'); // Set the pre-loader can be an animation
		if(username.val() == ''){ // Check the username values is empty or not
			username.focus(); // focus to the filed
			login_result.html('<span class="error">Please enter your mail</span>');
			return false;
		}
		if(password.val() == ''){ // Check the password values is empty or not
			password.focus();
			login_result.html('<span class="error">Please enter your password</span>');
			return false;
		}
		if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
			var UrlToPass = 'action=login&login='+username.val()+'&password='+password.val();
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
			type : 'POST',
			data : UrlToPass,
			url  : '../app/controler/accueil/ajaxControler.php',
			success: function(data){ // Get the result and asign to each cases
				
if(data == 0){
					login_result.html('<span class="error">Mail or Password Incorrect!</span>');
				}
				else if(data == 1){
						if(module == 'menu')
						{
							window.location = 'index.php?module='+module+'&action='+action+'&id='+id_resto+'&connect=success';
						}
						else
						{
							window.location = 'index.php?module='+module+'&action='+action+'&connect=success';
						}
				}
				else{
					alert('Problem with sql query');
				}

			console.log(data);
			},
				error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.status);
           console.log(xhr.responseText);
           console.log(thrownError);
       }
			});
		}
	});
});

</script>