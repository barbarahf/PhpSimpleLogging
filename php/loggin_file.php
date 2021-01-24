<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../css/forms.css" media="all">
</head>
<body>
<main>
    <div class="text_seccion">
        <h2>Bienvenido</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dignissimos officia sint animi voluptatum est
            praesentium nostrum, iusto earum fugit.</p>
        <figure>
            <img src="../img/laptop.png">
        </figure>
    </div>
    <div class="form_seccion">
        <h2>LOGGIN </h2>

        <?php
        // echo '<input  type="checkbox" name="' . $modulo . "UF" . $ufValue . '"  >' . ' <label for="' . $ufValue . '">' .
        //        $error = " $_SESSION['error_log']";
        ?>
        <form action="../php/loggin.php" method="post">

            <label for="usuario">Usuario:</label><br>
            <input required type="text" id="usuario" name="usuario" class="form_input">
            <br>
            <label for="llave">Llave:</label>
            <input required type="text" id="llave" name="llave" class="form_input">
            <br>
            <input required class="boton" type="submit" value="Submit">
        </form>
        <?php
        if (!empty($_SESSION['error_log'])) {
            echo '   <p class="error"> ' . strval($_SESSION['error_log']) . ' </p>';
        }
        ?>
        <p class="create_acount"><a href="register_file_html.php"> ¿No tienes una cuanta aun?</a></p>
    </div>
</main>
</body>
</html>
