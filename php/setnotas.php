<?php
session_start();
include "Usuario.php";
$obj = unserialize($_SESSION['objetosUsuarios'][$_SESSION['actual_log']]);

$arrayUsuarioNotas = $obj->getAsignaturas();


$arrSize = count($arrayUsuarioNotas);

$obj->setNotasSet(true);
for ($j = 0; $j < $arrSize; $j++) {
    $arrayUsuarioNotas[$j]->setNota($_POST[$arrayUsuarioNotas[$j]->getModulo() . $arrayUsuarioNotas[$j]->getUf()]);
}

$_SESSION['objetosUsuarios'][$_SESSION['actual_log']] = serialize($obj);


header("Location:user_maincontent_information.php");
