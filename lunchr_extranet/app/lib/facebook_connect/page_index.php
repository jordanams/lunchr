<?php
session_start();
include ("connect_sql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/checkbox.css" rel="stylesheet" media="screen">
<link href="css/accueil.css" rel="stylesheet" media="screen">
<link href="css/boutton.css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<title>Document sans titre</title>
</head>
<body>
<header>
	<div id="test">
	<span id="Logo"><a href="page_index.php">Touch valid</a></span>
    <span id="profil">
    Bonjour
    <?php
	 echo "<b class='bleu'>";
	 echo $_SESSION['LOG'];
	 echo "</b>";
	?>
    !
<br />
<a class="bleu" href="logout.php" title="bouton_deconnexion">Se decconecter</a>
</span>
    </div>
  
</header>
<span id="shadow">&nbsp;</span>

<div class="container">

<div id="nb_bug">


</div>
<?php
 if ($_SESSION["TYPE"] == "1")
 {
 echo "<div id='parents'>";
?>
	<div id="Message4">
	Vos enfants
    </div>
	<table id="tableau" border='1'>
	<tr>
	<th height="30">Nom de l'eleve</th>
	<th>Prenom de l'eleve</th>
	<th>Date de naissance</th>
    <th>Classe</th>
    </tr>

<?php
$query = "select * from tv_eleves
where ".$_SESSION['ID_USER']."=tv_parent_USE_ID";
	
$q = mysql_query($query);
	if($q)
	{
	while ($row = mysql_fetch_array($q))
	{
	echo"<tr border='3'>";
	echo"<td>".$row['USE_NOM']."</td>";
	echo"<td>".$row['USE_PRENOM']."</td>";
	echo"<td>".$row['USE_DATE_NAISSANCE']."</td>";
	echo"<td>".$row['USE_CLASSE']."</td>";
	echo"</tr>";
	}
	}
	echo"</div>";
 }
?>
</table>



<?php
 if ($_SESSION["TYPE"] == "2")
 {
 echo "<div id='Profs'>";
?>
PROFESSEURS
<br />
<ul id="classe">
<li><a href="affichage-classe.php?classe=1">classe 1</a></li>
<li><a href="affichage-classe.php?classe=2">classe 2</a></li>
<li><a href="affichage-classe.php?classe=3">classe 3</a></li>
<li><a href="affichage-classe.php?classe=4">classe 4</a></li>
</ul>

<?php
	echo"</div>";
 }
?>




<?php
 if ($_SESSION["TYPE"] == "3")
 {
 echo "<div id='Administration'>";
?>
ADMINISTRATION
<br />
<ul id="administration_eleve">
<li><a href="add_students.php">Ajouter un élève</a></li>
<li><a href="modif_students.php">Changer la classe d'un élève</a></li>
<li><a href="delete_students.php">Supprimer un élève</a></li>
<li><a href="parent_student.php">Associer un élève à un parent</a></li>
</ul>
<br />

<ul id="administration_creation_compte">Creation de compte
<li><a href="add_admin.php">Ajouter un administrateur</a></li>
<li><a href="add_parent.php">Ajouter un parent</a></li>
<li><a href="add_prof.php">Ajouter un professeur</a></li>
</ul>

<br />
<ul id="classe">Liste des classes
<li><a href="affichage-classe.php?classe=1">classe 1</a></li>
<li><a href="affichage-classe.php?classe=2">classe 2</a></li>
<li><a href="affichage-classe.php?classe=3">classe 3</a></li>
<li><a href="affichage-classe.php?classe=4">classe 4</a></li>
</ul>

<?php
	echo"</div>";
 }
?>




</div>
</body>
</html>