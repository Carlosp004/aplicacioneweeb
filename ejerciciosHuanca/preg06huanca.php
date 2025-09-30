<?php
    $dia = $_POST["txtDia"];
    (int)$mes = $_POST["txtMes"];
    $estacion = "";

    if ($mes >= 0 && $mes <= 3) {
        //Veranoo
        $estacion = "verano";
        switch ($mes) {
            case 0:
                if ($dia < 21) {
                    $estacion = "Primavera";
                }
                break;
            case 3:
                if ($dia > 20) {
                    $estacion = "Otoño";
                }
                break;
        }
    }
    if ($mes >= 4 && $mes <= 6) {
        //Otoño
        $estacion = "Otoño";
        switch ($mes) {
            case 6:
                if ($dia > 21) {
                    $estacion = "Invierno";
                }
                break;
        }
    }
    if ($mes >= 7 && $mes <= 9) {
        //Invierno
        $estacion = "Invierno";
        switch ($mes) {
            case 9:
                if ($dia > 22) {
                    $estacion = "Primavera";
                }
                break;
        }
    }
    if ($mes >= 10 && $mes <= 12) {
        //Primavera
        $estacion = "Primavera";
        switch ($mes) {
            case 12:
                if ($dia > 20) {
                    $estacion = "Verano";
                }
                break;
        }
    }

    echo "La estación que corresponde al día <b> $dia </b> y al mes <b> $mes </b> es:<b>" . $estacion . "</b>"
?>