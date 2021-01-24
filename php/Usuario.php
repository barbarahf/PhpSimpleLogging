<?php

class Usuario
{
    private $name;
    private $cognoms;
    private $dataNaix;
    private $correo;
    private $telefon;
    private $codPostal;
    private $nie;
    private $ciclo;

    public function __construct($name, $cognoms, $dataNaix, $correo, $telefon, $codPostal, $nie, $ciclo)
    {
        $this->name = $name;
        $this->cognoms = $cognoms;
        $this->dataNaix = $dataNaix;
        $this->correo = $correo;
        $this->telefon = $telefon;
        $this->codPostal = $codPostal;
        $this->nie = $nie;
        $this->ciclo = $ciclo;
    }


}

$required = array($_POST['nom'], $_POST['cognom'], $_POST['dataNaix'], $_POST['correo'], $_POST['telefono'], $_POST['adressaPost"'], $_POST['nie'], $_POST['ciclo']);
$error = false;
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        $error = true;
    }
}

if ($error) {
    if (validation(strval($_POST['nom']), strval($_POST['cognom']), intval($_POST['adressaPost']), strval($_POST['dni']))) {
        $objecto = new Usuario(str_replace(' ', '', $_POST['nom']), str_replace(' ', '', $_POST['cognom']), $_POST['dataNaix'], str_replace(' ', '', $_POST['correo']), $_POST['telefono'], $_POST['adressaPost'], $_POST['dni'], $_POST['ciclo']);

        echo "<table '>";
        echo "<thead style='display:inline-block;' '>";
        foreach ($_POST as $name => $val) {
            echo "<tr>";
            echo "<th colspan='1' style='border: black solid 1px'>" . $name . "</th>";
            echo "</tr>";
        }
        echo " </thead>";
        echo " <tbody style='display:inline-block;'>";

        foreach ((array)$objecto as $value => $stringValue) {
            echo "<tr>";
            echo "<td style='border: black solid 1px'>" . strval($stringValue) . "</td>";
            echo "</tr>";

        }
        echo " </tbody>";
        echo "</table  '>";

    } else {
        header("Location:Error.html");
    }
} else {
    header("Location:EmptyLabel.html");
}


function validation($name, $cog, $postal, $dni)
{
    if (!containsNumbers($name) && !containsNumbers($cog) && is_numeric($postal) && dni($dni)) {
        return true;
    } else return false;
}


function dni($dni)
{
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);

    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
        return true;
    } else {
        return false;
    }
}

/*
Verifica si un string contiene numero
*/
function containsNumbers(string $contentTocheck)
{
    for ($x = 0; $x < strlen($contentTocheck); $x++) {
        if (is_numeric($contentTocheck[$x])) {
            return true;
        }
    }
    return false;
}
