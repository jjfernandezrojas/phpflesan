<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("540348392738-s8g7l9ftq4c5i44hba4r49aft34conl8.apps.googleusercontent.com");
	$gClient->setClientSecret("C4huqVYJJYC2vwAYPtny_N5p");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setHostedDomain('flesan.com.pe');
	$gClient->setSubject('soporte@flesan.com.pe');
	$gClient ->setDeveloperKey ( "AIzaSyBootjGDKSp7o0QUZVT9BDLuQN4aGFgAjE" );
	$gClient->setLoginHint('flesan.com.pe');
	$gClient->setRedirectUri("http://localhost/login.google/aldo.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.me https://www.googleapis.com/auth/admin.directory.user.readonly https://www.googleapis.com/auth/admin.directory.user");
    


?>
