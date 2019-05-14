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

$sql = "SELECT Username, Password FROM interligatewc.users WHERE interligatewc.users.Username = '$username'";
$fila = $db->prepare($sql);
$fila->execute();

//En result tenemos el par Usuario - Contraseña que hay en la BBDD para comprobar si esta bien
$result = $fila->fetch(PDO::FETCH_ASSOC);

//$dbUsername = $result["Username"];
//$dbPass = $result["Password"];

function checkLogin($username, $password, $res){
    if (!isset($username) || !isset($password) || $password!==$res["Password"]){
        return false;
    }
    return true;
        //(array_key_exists($username, $res) && (strcmp($res[$username],$password)==0));
}

//Valido
if(!checkLogin($username, $password, $result)){
    session_destroy();
    $errorLogin = "El usuario o la contraseña son incorrectos.";
    header("Location: ../index.php?errorLogin=$errorLogin");
}else {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
}
