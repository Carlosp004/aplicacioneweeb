<?php

$nommbre01 = $_POST["txtNombre01"];
$edad01 = (int) $_POST["numbEdad01"];
$nommbre02 = $_POST["txtNombre02"];
$edad02 = (int) $_POST["numbEdad02"];

if ($edad01 > $edad02) {
    $diferencia = $edad01 - $edad02;
    $resultado = "Hola " . $nommbre01 . " tu eres el mayor por " . $diferencia . " año(s). 😉";
} elseif ($edad02 > $edad01) {
    $diferencia = $edad02 - $edad01;
    $resultado = "Hola " . $nommbre02 . " tu eres el mayor por " . $diferencia . " año(s). 😉";
} elseif ($edad01 == $edad02) {
    $resultado = "Hola " . $nommbre01 . " y " . $nommbre02 . " ustedes tienen la misma edad. 😉";
}

echo $resultado;
?>
