<?php

	$dbhost = "localhost";
	$dbname = "interligatewc"; //Rellenar despues de crear la BBDD
	$dbpass = "alviruo10"; //Rellenar despues de crear la BBDD
	$dbuser = "root"; //Rellenar despues de crear la BBDD
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		die("Error conexión BBDD " . $error->getMessage());
	}	
?>

