<?php

$dia = (int) $_POST["txtDia"];
$mes = $_POST["txtMes"];
$signo = "";

if (($dia >= 22 && $mes == 12) || ($dia <= 19 && $mes == 1)) {
    $signo = "Capricornio";
} elseif (($dia >= 20 && $mes == 1) || ($dia <= 17 && $mes == 2)) {
    $signo = "Acuario";
} elseif (($dia >= 18 && $mes == 2) || ($dia <= 19 && $mes == 3)) {
    $signo = "Piscis";
} elseif (($dia >= 20 && $mes == 3) || ($dia <= 19 && $mes == 4)) {
    $signo = "Aries";
} elseif (($dia >= 20 && $mes == 4) || ($dia <= 20 && $mes == 5)) {
    $signo = "Tauro";
} elseif (($dia >= 21 && $mes == 5) || ($dia <= 20 && $mes == 6)) {
    $signo = "Géminis";
} elseif (($dia >= 21 && $mes == 6) || ($dia <= 22 && $mes == 7)) {
    $signo = "Cáncer";
} elseif (($dia >= 23 && $mes == 7) || ($dia <= 22 && $mes == 8)) {
    $signo = "Leo";
} elseif (($dia >= 23 && $mes == 8) || ($dia <= 22 && $mes == 9)) {
    $signo = "Virgo";
} elseif (($dia >= 23 && $mes == 9) || ($dia <= 22 && $mes == 10)) {
    $signo = "Libra";
} elseif (($dia >= 23 && $mes == 10) || ($dia <= 21 && $mes == 11)) {
    $signo = "Escorpio";
} elseif (($dia >= 22 && $mes == 11) || ($dia <= 21 && $mes == 12)) {
    $signo = "Sagitario";
} else {
    $signo = "Fecha no válida";
}

echo "<h2>Tu signo zodiacal es: $signo</h2>";
?>
