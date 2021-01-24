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
    <div class="form_seccion">
        <form action="../php/register.php" method="POST">
            <!--            <a href="../screens/loggin.html">content</a>-->
            <h2>REGISTRO</h2>
            <label>
                <input name="username" type="text" placeholder="Nombre de usuario" class="form_input" required/>
            </label><br/>
            <label>
                <input name="pass" type="text" placeholder="Contraseña" class="form_input" required/>
            </label><br/>
            <label>
                <input name="nom" type="text" placeholder="Nombre" class="form_input" required/>
            </label><br/>
            <label>
                <input name="dataNaix" type="date" placeholder="Fecha" class="form_input" required/>
            </label><br/>
            <label>
                <input name="correo" type="email" placeholder="Email" class="form_input" required/>
            </label><br/>
            <input class="boton" type="submit" value="Submit">
            <?php
            if (!empty($_SESSION['error_register'])) {
                echo  '<p class="error"> ' . strval($_SESSION['error_register']) . ' </p>';
            }
            ?>
            <?php
            echo ' <p class="create_acount">'.'<a href="../screens/register_loggin.html">'. "Salir" .'</a>'.'</p>';
            ?>
        </form>


    </div>
</main>
</body>
</html>