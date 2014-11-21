<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lunchr - Back office</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
      <!-- NOTIFICATION -->
<?php

// CONNEXION
if(isset($_GET['login_success'])) {
  
  if($_GET['login_success'] == 0) {
	   echo '<div class="alert alert-danger" role="alert">Login/Mot de passe incorrect veuillez reessayer !</div>';
  }

}

//DECONNEXION
if(isset($_GET['logout'])) {
  
    if($_GET['logout'] == 1) {
  	   echo '<div class="alert alert-success" role="alert">Deconnexion réussie !</div>';
  }
}

//SESSION EXPIRE
if(isset($_GET['session'])) {
  
  if($_GET['session'] == 'expired') {
	   echo '<div class="alert alert-danger" role="alert">Votre session a expiré veuillez vous reconnecter</div>';
  }

}
?>

    <div class="container">
        <div class="row">
        </div>
            <div class="col-md-4 col-md-offset-4">
	            <h1 id="logo"><img src="images/logo.png"/></h1>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Back-office</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="#" method="get">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="E-mail" name="login" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <input class="btn btn-lg btn-success btn-block" type="submit" value="login" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
