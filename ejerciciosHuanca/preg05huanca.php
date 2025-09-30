<?php
    $colegio = $_POST["selectColegio"];
    $social = $_POST["selectSocial"];
    $importe = 0;


    switch ($colegio) {

        case "NACIONAL":

            if ($social == "A") {
                $importe = 300;
            }
            if ($social == "B") {
                $importe = 200;
            }
            if ($social == "C") {
                $importe = 100;
            }

            break;
        case "PARTICULAR":
            if ($social == "A") {
                $importe = 400;
            }
            if ($social == "B") {
                $importe = 300;
            }
            if ($social == "C") {
                $importe = 200;
            }
            break;
    }

    echo "Colegio: <b>$colegio </b> <br> Social: <b> $social </b> <br>", "El importe a pagar es: <b> " . $importe . "</b>"
?>