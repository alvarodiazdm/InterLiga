<?php

	$dbhost = "localhost";
	$dbname = "id9188101_departamentossql"; //Rellenar despues de crear la BBDD
	$dbpass = "Alviruo10"; //Rellenar despues de crear la BBDD
	$dbuser = "id9188101_alvarodatabase"; //Rellenar despues de crear la BBDD
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		die("Error conexión BBDD " . $error->getMessage());
	}	
?>

