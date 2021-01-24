<?php
session_start();

include "utils_funtions.php";
include "Usuario.php";

$graella = array(
    "M01" => array(1, 2, 3),
    "M02" => array(1, 2, 3, 4),
    "M03" => array(1, 2, 3, 4, 5, 6),
    "M04" => array(1, 2, 3),
    "M05" => array(1, 2, 3),
    "M06" => array(1, 2, 3, 4),
    "M07" => array(1, 2, 3, 4),
    "M08" => array(1, 2, 3, 4),
    "M09" => array(1, 2, 3),
    "M10" => array(1, 2),
    "M11" => array(1),
    "M12" => array(1),
    "M13" => array(1),
);
/**
 * Se crea un nuevo usuario, antes se verifica su disponibilidad
 */
$_SESSION['error_register']="";
if (!checkUserExist($_POST['username'], $_SESSION['usuarios'])) {
    $newUser = new Usuario(str_replace(' ', '', $_POST['username']), str_replace(' ', '', $_POST['nom']), str_replace(' ', '', $_POST['pass']), $_POST['dataNaix'], $_POST['correo']);
    //Changes
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['usuarios'][$_SESSION['name']] = $_POST['pass'];
    //echo '<p>'.$_SESSION['usuarios'][$name] = $_POST['pass'].'</p>';
    $_SESSION['graella'] = $graella;

    $_SESSION['actualUser'] = serialize($newUser);

    header("Location:user_information.php");
} else {

    $_SESSION['error_register'] = "El usuario ya existe, error";
    header("Location:register_file_html.php");

}


