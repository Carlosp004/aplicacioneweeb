<?php
$numeroPar = $_POST['txtPares'];

if ($numeroPar > 100) {
    echo "El numero ingresado no debe ser mayor a 100";
} else {
    $i = 1;
    while ($i <= $numeroPar * 2) {
        if ($i % 2 == 0) {
            $par = $i;
            echo "Numero: " . $i . "<br>";
        }

        $i++;
    }

//Calculo de la suma de los numeros pares
    $suma = $numeroPar * ($numeroPar + 1);
    echo "La suma de los pares es: " . $suma;
}

?>