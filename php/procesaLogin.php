<?php

//Aqui traeremos las cuentas de nuestra base de datos
//Por ahora simulamos una
/*$logins = array(
    'admin' => 'admin',
    'pepe' => 'pepe'
);*/

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

require_once 'conectar.php';

$sql = "SELECT Username, password FROM usuers WHERE Username = $username";





function checkLogin($username, $password, $logins){
    if (!isset($username) || !isset($password)){
        return false;
    }
    return (array_key_exists($username, $logins)
        && (strcmp($logins[$username],$password)==0));
}

//Valido
if(!checkLogin($username, $password,$logins)){
    session_destroy();
    $errorLogin = "El usuario o la contraseña son incorrectos.";
    header("Location: ../index.php?errorLogin=$errorLogin");
}else {
    session_start();
    //$_SESSION['username'] = $username;
    header("Location: /Interliga/php/home.php?username=$username");
}
