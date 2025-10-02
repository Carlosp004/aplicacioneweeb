<?php

$numeroImpar = $_POST['txtImpares'];

$i = 1;
while ($i <= $numeroImpar * 2) {
    if ($i % 2 != 0) {
        echo "Numero: " . $i . "<br>";
    }

    $i++;
}

//Calculo de la suma de los numeros pares
$suma = $numeroImpar *$numeroImpar ;
echo "La suma de los pares es: " . $suma;

?>