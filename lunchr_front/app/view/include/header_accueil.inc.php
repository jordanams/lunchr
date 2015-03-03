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

                <div class="section_connection col-lg-4 col-md-4 col-sm-4 col-xs-4 dropdown">
                    <div class="pull-right">
                        <!--<button class="color_principal button_log button_style btn font_open_sansbold" onClick="ga('send', 'event', 'button', 'sign-in', 'log', 'clic');" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<form><input type='text'/></form>" data-original-title="Fill in form"> Log in</button>!-->
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
                        <button class="color_principal button_log button_style font_open_sansbold trigger">Log in</button> 
                        <button class="button_register button_register_accueil button_style font_open_sansbold" data-toggle="modal" data-target=".bs-example-modal-lg">Register</button>
                    </div>
                    <div class="slide_toogle_login pull_absolute">
                        <div class="text-center already_account">If you already have an account</div>
                       <!--  <div class="fb-login-button col-lg-10" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true">Connect with Facebook !</div> -->
                        <span class="col-lg-12 col-xs-12 text-center or_bloc"></span> 
                        <span class="login_result"></span>
                         <div class="form_connect_login">
                            <!-- <form> -->
                            <input id="login" type="email" name="login" class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" type="text" placeholder="Email" required>
                            <input id="password" name="password" class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" type="password" placeholder="Password">
                            <label class="no_pad remember_password col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" name="remember_password"><!-- <input type="checkbox" class="checkbox_remember_me" name="remember_password" value="Remember me">Remember me</label> -->
                            <!-- <a href="#" class="no_pad forgot_password col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1" data-toggle="modal" data-target=".forgot_password_modal_sm">You forgot your password ?</a> -->
                            <button  class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 connexion_login" value="connexion">Connexion</button>
                           <!--  </form>  -->
                        </div> 
                      </div>
                </div>
                <a alt="mon compte" class="compte_icone_resp" data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><span class="fa fa-user"></span></a>   
                <a href="#">
                    <!--<div class="panier_resp">
                        <span class="pull-left price_resp">Cart</span>
                        <i class="pull-right panier_icon_resp fa fa-shopping-cart"></i>
                    </div>-->
                </a>
            </div>
<?php
}
else
{
	//echo"Bonjour".$_SESSION['login']."";
	echo "<div class='pull-right'>
			<button class='button_myaccount button_style font_open_sansbold'><a class='my_account_button' href='index.php?module=account&action=account'>My account</a></button>
			<a class='logout' href='index.php?logout=1'>Logout</a>
		</div>";
}
?>
        </div>
    </section>
    <script>
$(document).ready(function(){
	$('#username').focus(); // Focus to the username field on body loads
	$('.connexion_login').click(function(){ // Create `click` event function for login
		var username = $('#login'); // Get the username field
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
					window.location = 'index.php?module=accueil&action=index&connect=success';
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