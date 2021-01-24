<?php
session_start();
include "Usuario.php";
$alumno = unserialize($_SESSION['actualUser']);

//setcookie($alumno->getUsuario(), $alumno->getName(), time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/graella.css" media="all">
    <title>Title</title>
</head>
<body>
<div class="boxes">


    <form method="post" action="graella.php">
        <h2>USUARIO</h2>
        <tr>
            <?php
            /**
             * Informacion del registro
             */

            //        var_dump($alumno);
            echo '<td>' . $alumno->getName() . '</td><br>';
            echo '<td>' . $alumno->getEmail() . '</td><br>';
            echo '<td>' . $alumno->getUsuario() . '</td><br>';

            //        var_dump($alumno);
            ?>
        </tr>
        <input class="boton" type="submit" value="Submit">
        <br>

    </form>
</div>
</body>
</html>