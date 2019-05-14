<?php

require_once 'conectar.php';

$name = $_REQUEST["name"];
$surname = $_REQUEST["surname"];
$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$repeatPass = $_REQUEST["repeatPassword"];
$radioButton = $_REQUEST["botonRadio"];

function checkRegister($un, $pass, $rp, $em){
    if($un==null || ($pass==null) || $rp==null || $em==null){
        return false;
    }
    return true;
}
function checkPass($pass, $repPass){
    if($pass!=$repPass){
        return false;
    }
    return true;
}

if(!checkRegister($username, $password, $repeatPass, $email)){
    $errorRegister = "Debe completar todos los campos obligatorios.";
    header("Location: register.php?errorRegister=$errorRegister");
}else if(!checkPass($password, $repeatPass)){
    $errorPass = "La contrasena debe ser la misma en ambos campos.";
    header("Location: register.php?errorPass=$errorPass");
}else {
    //$hash = password_hash($password, PASSWORD_BCRYPT);

    $busca = "SELECT * FROM users WHERE Username = '$username' OR Email = '$email'";

    $fila = $db->prepare($busca);
    $fila->execute();
    $result = $fila->fetch(PDO::FETCH_ASSOC);

    if ($result != null) {
        echo "<br/>" . "El nombre de usuario o el email ya existe, <a href='register.php'>escoja otro</a>";
    } else {
        //echo "CORRECTO";
        session_start();
        $_SESSION["username"] = $username;
        $query = "INSERT INTO users (Name, Surname, Username, Email, Password) VALUES
              ('$name', '$surname', '$username', '$email', '$password')";
        if($db->query($query) == TRUE){
            if($radioButton==1) {
                header("Location: crearEquipo.php");//?username=" . $username);
            } else if($radioButton==2){
                header("Location: searchTeam.php");//?username=".$username);
            }else{
                header("Location: ../index.php");
            }
        }else{
            echo "Error al crear usuario." . $query . "<br>" . $db->errorInfo();
        }
    }
}
//mysqli_close($db);
