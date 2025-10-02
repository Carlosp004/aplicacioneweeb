<?php
$rango1 = $_POST['txtRango1'];
$rango2 = $_POST['txtRango2'];

$suma = 0;
$i = $rango1;
while ($i<=$rango2){
    echo "Los numeros dentro del rango son: " . ($i) . "<br>";
    $suma += $i;
    $i++;
}

echo "La suma es: " . $suma;

?>