<?php
session_start();
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
    <form method="post" action="setnotas.php">
        <h2>NOTAS</h2>
        <table style="width:100%">
            <?php
            session_start();
            include "Usuario.php";

            $obj = "";
            $userLog = "";
            foreach ($_SESSION['objetosUsuarios'] as $userLog => $value) {
                if ($userLog == $_SESSION['actual_log']) {
                    $obj = unserialize($_SESSION['objetosUsuarios'][$userLog]);
                }
            }

            /**
             * Tabla de graella, asignaturas disponibles
             */
            $arrayUsuarioNotas = $obj->getAsignaturas();
            echo '<tr>';
            echo '<th class="main_module">' . "MODULO" . '</th>';
            echo '<th class="main_module">' . "UF" . '</th>';
            echo '<th class="main_module">' . "NOTA" . '</th>';
            echo '</tr>';

            foreach ($arrayUsuarioNotas as $asignatura) {
                echo '<tr>';
                echo '<td  >' . $asignatura->getModulo() . '</td>';
                echo '<td  >' . $asignatura->getUf() . '</td>';
                if ($obj->getNotasSet() == false) {
                    echo '<td  >' . '<input required type = "number" id = "tentacles" name="' . $asignatura->getModulo() . $asignatura->getUf() . '" min = "0" max = "10" >' . '</td>';
                } else {
                    echo '<td  >' . $asignatura->getNota() . '</td>';
                }
                //                echo '<td  >' . $asignatura->getNota() . '</td>';
                echo '</tr>';
            }
            if ($obj->getNotasSet() != false) {
                echo '<td  >' . "Promedio:" . $obj->getPromedio() . '</td>';
            }

            //OJO
            // echo '<td  >' . $asignatura->getNota() . '</td>';

            //$_SESSION[$_SESSION['usuarioLog']] = $serializat;
            $serializat = serialize($obj);
            $_SESSION['objetosUsuarios'][$userLog] = $serializat;
            echo  '</table>';
            if ($obj->getNotasSet() == false) {
                echo '<input class="boton" type = "submit" value = "Submit" >';
            } else {
                echo '<br>'. '<div>' . '<a href="../screens/register_loggin.html" class="boton " >' . "Salir" . '</a>' . '</div> ' . '<br>';;
            }
            ?>
    </form>

</div>
</body>
</html>
