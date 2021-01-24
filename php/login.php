<?php

$alumnes = [
    "Marta" => "123",
    "Daniel" => "12345",
    "Pere" => "Java"
];

$pwd = $_POST['llave'];
$user = $_POST['usuario'];
if (empty($pwd) || empty($user)) {
    header("Location:EmptyLabel.html");
} else {
    if (checkCredential($user, $pwd, $alumnes)) {
        header("Location:../screens/bienvenidoAlumn.html");
    } else {
        header("Location:ErrorAlumn.html");
    }
}

function checkCredential($user, $clau, $usersArray)
{
    foreach ($usersArray as $key => $value) {
        if ($key == $user) {
            return checkPassword($clau, $key, $usersArray);
        }
    }
    return false;
}

function checkPassword($passw, $arrayKey, $arr)
{
    /*
     * Pasa un array generico, puede ser uno de profesores o alumnos*/
    if ($arr[$arrayKey] == $passw) {
        return true;
    } else {
        return false;
    }

}
