<?php

$numero = $_POST["numero"];
$longitud = strlen((string) $numero); // Convertimos el número a una cadena (string) para contar su longitud
if ($longitud == 1) {
    $resultado = "El número es de 1 dígito.";
} elseif ($longitud == 2) {
    $resultado = "El número es de 2 dígitos.";
} elseif ($longitud == 3) {
    $resultado = "El número es de 3 dígitos.";
} else {
    $resultado = "El número tiene más de 3 dígitos.";
}

echo $resultado;
?>
