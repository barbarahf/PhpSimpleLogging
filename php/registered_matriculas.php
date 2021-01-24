<?php
session_start();
include "Usuario.php";
//include "Usuario.php";

$lasAsignaturas = array();
/**
 * Se obtiene el key del input (que es unico para cada modulo+uf) y se usa para crear los objeto de tipo "asignatura"
 */
foreach ($_POST as $key => $value) {
    $modulo = substr($key, 0, strpos($key, 'U'));
    $uf = substr($key, strpos($key, 'U'), strlen($key));
    $asignaturaNueva = new Assignatura(strval($uf), strval($modulo));
    array_push($lasAsignaturas, $asignaturaNueva);
}


$alumne = unserialize($_SESSION['actualUser']);
$alumne->setAsignaturas($lasAsignaturas);

$_SESSION['objetosUsuarios'][$_SESSION['name']] = serialize($alumne);
var_dump($_SESSION['objetosUsuarios']);

header("Location:../screens/register_loggin.html");
