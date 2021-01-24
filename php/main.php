<?php
session_start();


if (isset($_POST['userRegister'])) {
    header("Location:register_file_html.php");
} else {
    header("Location:loggin_file.php");
}
//$_SESSION = array();
//session_destroy();
