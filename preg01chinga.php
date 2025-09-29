<?php

$cliente = $_POST["txtCliente"];
$montoi = $_POST["numMonto"];
$descuento = 0;
$montof = 0;

if ($montoi >= 1000) {
    $descuento = $montoi * 0.10;
}

$montof = $montoi - $descuento;

echo 'RESULTADO FINAL <br>';
echo 'Hola ' . $cliente . "<br>";
echo 'Monto Inicial: ' . $montoi . "<br>";
echo 'Descuento: ' . $descuento . "<br>";
echo 'Total a Pagar: ' . $montof . "<br>";
?>
