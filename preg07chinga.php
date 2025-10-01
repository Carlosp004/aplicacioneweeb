<?php

$dni = $_POST["numbDNI"];
$resto = $dni % 23; //% oara obtener el resto de la división.

if ($resto == 0) {
    $letra = 'T';
} elseif ($resto == 1) {
    $letra = 'R';
} elseif ($resto == 2) {
    $letra = 'W';
} elseif ($resto == 3) {
    $letra = 'A';
} elseif ($resto == 4) {
    $letra = 'G';
} elseif ($resto == 5) {
    $letra = 'M';
} elseif ($resto == 6) {
    $letra = 'Y';
} elseif ($resto == 7) {
    $letra = 'F';
} elseif ($resto == 8) {
    $letra = 'P';
} elseif ($resto == 9) {
    $letra = 'D';
} elseif ($resto == 10) {
    $letra = 'X';
} elseif ($resto == 11) {
    $letra = 'B';
} elseif ($resto == 12) {
    $letra = 'N';
} elseif ($resto == 13) {
    $letra = 'J';
} elseif ($resto == 14) {
    $letra = 'Z';
} elseif ($resto == 15) {
    $letra = 'S';
} elseif ($resto == 16) {
    $letra = 'Q';
} elseif ($resto == 17) {
    $letra = 'V';
} elseif ($resto == 18) {
    $letra = 'H';
} elseif ($resto == 19) {
    $letra = 'L';
} elseif ($resto == 20) {
    $letra = 'C';
} elseif ($resto == 21) {
    $letra = 'K';
} elseif ($resto == 22) {
    $letra = 'E';
}

echo "Para el DNI: " . $dni . " el NIF es " . $letra . ".";
?>