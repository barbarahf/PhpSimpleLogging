<?php
session_start();

include "utils_funtions.php";
include "Usuario.php";

$pwd = $_POST['llave'];
$user = $_POST['usuario'];

$_SESSION['error_log']="";
if (empty($pwd) || empty($user)) {
    header("Location:../screens/EmptyLabel.html");
} else {
    if (checkCredential($user, $pwd, $_SESSION['usuarios'])) {
        $_SESSION['actual_log'] = $user;
        header("Location:user_maincontent_information.php");
    } else {
        header("Location:loggin_file.php");
        $_SESSION['error_log'] = "Este usuario no existe o la contraseña es incorrecta";
//        print_r($_SESSION['usuarios']);

    }
}

