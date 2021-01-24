<?php
session_start();

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
    if ($arr[$arrayKey] == $passw) {
        return true;
    } else {
        return false;
    }

}

function checkUserExist($user, $usersArray)
{
    foreach ($usersArray as $key => $value) {
        if ($key == $user) {
            return true;
        }
    }
    return false;
}
/*$alumne = unserialize($_SESSION['alumne']);
$alumne -> setData($novaData);
$alumne -> setNom($nom);*/

