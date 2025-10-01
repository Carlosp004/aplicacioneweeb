<?php

$dia = (int) $_POST["txtDia"];
$mes = $_POST["txtMes"];
$estacion = "";

// VERANO: 21 diciembre – 20 marzo
if (($mes == "diciembre" && $dia >= 21) ||
        ($mes == "enero") ||
        ($mes == "febrero") ||
        ($mes == "marzo" && $dia <= 20)) {
    $estacion = "Verano";
}

// OTOÑO: 21 marzo – 21 junio
elseif (($mes == "marzo" && $dia >= 21) ||
        ($mes == "abril") ||
        ($mes == "mayo") ||
        ($mes == "junio" && $dia <= 21)) {
    $estacion = "Otoño";
}

// INVIERNO: 22 junio – 22 setiembre
elseif (($mes == "junio" && $dia >= 22) ||
        ($mes == "julio") ||
        ($mes == "agosto") ||
        ($mes == "setiembre" && $dia <= 22)) {
    $estacion = "Invierno";
}

// PRIMAVERA: 23 setiembre – 20 diciembre
elseif (($mes == "setiembre" && $dia >= 23) ||
        ($mes == "octubre") ||
        ($mes == "noviembre") ||
        ($mes == "diciembre" && $dia <= 20)) {
    $estacion = "Primavera";
} else {
    $estacion = "Fecha no válida";
}

echo "La estación para el $dia de $mes es: $estacion";
?>