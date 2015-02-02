<?php 
	session_start();
  require_once("facebook.php");
  include("fb_bdd_sql.php");
  $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $config = array(
      'appId' => '178589665644064',
      'secret' => '335cbf6662ade0cae1878f119777ad21',
      'fileUpload' => false, // optional
      'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);

$SESSION = $facebook->getUser();
if(empty($SESSION)) {
	header('Location:'.$facebook->getLoginUrl(array(
		
		'locale' => 'fr_FR'
	
	)));	
}

else
{
	try {
		$uid = $facebook->getUser();
		$me = $facebook->api('/me');
	}
	catch (Exception $e) 
	{
		print_r($e);
	}
	
}

if(isset($me))
{
		global $connexion;
	$fql = "select uid,name,pic_big from user where uid=$uid";
	$param = array(
	'method' => 'fql.query',
	'query' => $fql,
	'callback' => ''
	);
	$fb = $facebook->api($param);
	$fb = $fb[0];
	//print_r($fb);
	$user = $connexion->query('SELECT USE_ID,USE_LOGIN,USE_PASSWORD FROM test_facebook WHERE FACEBOOK_ID='.$uid.'');
	$user = $user->fetchAll();
	if(empty($user)) {
		
		$login = $fb['name'];
		$password = md5(uniqid());
		$connexion->exec("INSERT INTO test_facebook (USE_LOGIN,USE_PASSWORD,FACEBOOK_ID) 
		VALUES 
		('".mysql_escape_string($login)."','$password',$uid)");
		$id = $connexion->lastInsertId();
		print_r($uid);
	}
	else
	{
		$user = $user[0];
		$login = $user['USE_LOGIN'];
		$password = $user['USE_PASSWORD'];
		$id = $user['USE_ID'];
	}
	$_SESSION['users'] = array();
	$_SESSION['users'] ['login'] = $login ;
	$_SESSION['users'] ['password'] = $password ;
	$_SESSION['users'] ['id'] = $id;
	header('location:page_index.php');
	
}








?>