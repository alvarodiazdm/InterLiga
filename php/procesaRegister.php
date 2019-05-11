<?php

//Cuando implemente la BBDD, tengo que quitar los comentarios y comprobar si funciona correctamente.
/*
$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "BBDDTEWC";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($conexion->connect_error){
    die("La conexión falló: " .$conexion->connect_error);
}
*/
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
}else{
   $hash = password_hash($password, PASSWORD_BCRYPT);

/*
    $buscaUsuario = "SELECT * FROM $tbl_name WHERE Username = $username";
    $buscaEmail = "SELECT * FROM $tbl_name WHERE Email = $email";

    $resultUserName = $conexion->query($buscaUsuario);
    $count1 = mysqli_num_rows($resultUserName);
    $resultEmail = $conexion->query($buscaEmail);
    $count2 = mysqli_num_rows($resultEmail);

    if($count1 == 1){
        echo "<br/>". "El nombre de usuario ya existe, <a href='register.php'>escoja otro nombre</a>";
    }
    if($count2 == 1) {
        echo "<br/>". "El email ya ha sido registrado, <a href='register.php'>escoja otro</a>";
    }
    $query = "INSERT INTO $tbl_name (Name, Surname, Username, Password) VALUES
              ('$name', '$surname', '$username', '$hash')";
    if($conexion ->query($query) === TRUE){
 */
    if($radioButton==2){
        header("Location: searchTeam.php?username=".$username);
    }else{
        header("Location: crearEquipo.php?username=".$username);
    }
/*} else {
    echo "Error al crear usuario." . $query . "<br>" . $conexion->error;
}*/
}
//mysqli_close($conexion);
