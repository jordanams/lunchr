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
    <script>
    // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '774835662595773',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      console.log(+response.mail);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '! And your mail is '+response.mail+'';
    });
  }
    </script>
        <script src="js/jquery-2.1.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDfgYPkrlOHLiZaXOghQDmTwqfLsw6byeg&sensor=false"></script>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 resp_logo no_pad">
                    <a href="index.php?module=accueil&action=index" onClick="ga('send', 'event', 'button', 'logo', 'home', 'clic');"><img  class="logo" src="img/new_logo.png"></a>
                </div>
                <div class="section_how_work col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding:13px">
                    <div class="text-center button_how_work">
                        <span id="hdiw_button" class="font_open_sansbold" onClick="ga('send', 'event', 'button', 'sign-up', 'log', 'clic');">How does it work</span>
                    </div>
                </div>
<?php
if(!isset($_SESSION['login']))
{
?>
                <div class="section_connection col-lg-4 col-md-4 col-sm-4 col-xs-4 dropdown">
                    <div class="pull-right">
                        <!--<button class="color_principal button_log button_style btn font_open_sansbold" onClick="ga('send', 'event', 'button', 'sign-in', 'log', 'clic');" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<form><input type='text'/></form>" data-original-title="Fill in form"> Log in</button>!-->
                        <button class="color_principal button_log button_style font_open_sansbold trigger">Log in</button> 
                        <button class="button_register button_style font_open_sansbold" data-toggle="modal" data-target=".bs-example-modal-lg" onClick="ga('send', 'event', 'button', 'sign-up', 'log', 'clic');">Register</button>
                    </div>
                    <div class="slide_toogle_login pull_absolute">
                        <div class="text-center already_account">Si vous avez déjà un compte</div>
<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true">Connectez-vous avec Facebook !</div>
                        <span class="col-lg-12 text-center or_bloc">Or</span> 
                        <span class="login_result"></span>
                        <div class="form_connect_login">
                            <!-- <form> -->
                            <input id="login" type="email" name="login" class="col-lg-10 col-lg-offset-1 " type="text" placeholder="Email" required>
                            <input id="password" name="password" class="col-lg-10 col-lg-offset-1 " type="password" placeholder="Password">
                            <label class="no_pad remember_password col-lg-10 col-lg-offset-1 " name="remember_password"><input type="checkbox" class="checkbox_remember_me" name="remember_password" value="Remember me">Remember me</label>
                            <a href="#" class="no_pad forgot_password col-lg-10 col-lg-offset-1 ">You forgot your password ?</a>
                            <button type="submit" class="col-lg-10 col-lg-offset-1 connexion_login" value="connexion">Connexion</button>
                            <!-- </form> -->
                        </div>  
                    </div>
                </div>
                <a alt="mon compte" class="compte_icone_resp" href="#"><span class="fa fa-user"></span></a>   
                <a href="#">
                    <div class="panier_resp">
                        <span class="pull-left price_resp">Cart</span>
                        <i class="pull-right panier_icon_resp fa fa-shopping-cart"></i>
                    </div>
                </a>
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
        </div>
    </section>