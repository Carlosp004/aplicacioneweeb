<?php
    $nAle = $_POST['txtAlea'];

    $cont = 0;
    $par = [];
    $impar = [];
    while ($cont < $nAle) {
        $rands = rand();
        if ($rands % 2 == 0) {
            $par[] = $rands;
        } else {
            $impar[] = $rands;
        }
        $cont++;
    }
    echo "<strong>Lista de Pares:</strong><br>";
    foreach ($par as $p) {
        echo $p . "<br> ";
    }

    echo "<br><br><strong>Lista de Impares:</strong><br>";
    foreach ($impar as $i) {
        echo $i . "<br> ";
    }

    echo "<br>Cantidad de Numeros Pares : " . count($par) . "<br>";
    echo "Cantidad de Numeros Impares: " . count($impar);
?>