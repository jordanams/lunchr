<?php
if (isset($_COOKIE["Login"])) {
		header("Location: page_index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TEST FBn</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration du CSS Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/login.css" rel="stylesheet" media="screen">
<link href="css/boutton.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/checkbox.css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Conteneur principal -->
<div class="container"></div>

<header>
	<div id="test">
	<span id="Logo"><a href="">Touch Valid</a></span>
    </div>
</header>
<span id="shadow">&nbsp;</span>

<div id="Message1">
Bienvenue sur Touch Valid
</div>

<div id="login">

		<h2><span class="fontawesome-lock"></span>Connectez-vous !</h2>
        <br />
        <br />

		<form action="verif.php" method="get">

			<fieldset>
              <?php
		if ($_GET["message"]=="Erreur")
		{
			echo "Erreur de Login / Password";
		}
		
		?>
        
				
				<p><input type="text" id="email" placeholder="Entrez votre login" name="login"  required /></p> 

				
				<p><input type="password" id="password" placeholder="Entrez votre mot de passe" name="password" required /></p> 
                  <div class="checkItem">
      <div class="squaredFour">
	
	
</div>
	<p>
       <input type="checkbox" value="remember" id="aa" name="check" />
       <label>Rester connecte</label>
       </p>
      </div>
      

				<p><input class="button" type="submit" value="Sign In"></p>

			</fieldset>

		</form>
      <a href="index-facebook.php">Se connecter avec facebook</a>

	</div> <!-- end login -->
    


<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript"></script> 
</body>
</html>
