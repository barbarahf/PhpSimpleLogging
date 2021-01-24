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
    <form method="post" action="registered_matriculas.php">
        <h2>MATRICULACION</h2>
        <table style="width:100%">
            <?php
            /**
             * Tabla de graella, asignaturas disponibles
             */
            foreach ($_SESSION['graella'] as $modulo => $value) {
                echo '<tr>';
                echo '<th class="main_module">' . $modulo . ":" . '</th>';
                echo '</tr>';
                echo '<tr>';
                foreach ($value as $uf => $ufValue) {
                    echo '<td class="box">';
                    echo '<input  type="checkbox" name="' . $modulo . "UF" . $ufValue . '"  >' . ' <label for="' . $ufValue . '">' .
                        "UF" . $ufValue . '</label>';
                    echo '</td>';
                }
                echo '</tr>';
            }
            echo '<br>';
            ?>
            <br></table>
        <input class="boton" type="submit" value="Submit">
    </form>

</div>
</body>
</html>