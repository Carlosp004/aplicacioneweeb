<?php
    $dia = $_POST["txtDia"];
    (int)$mes = $_POST["txtMes"];
    $signo = "";

    switch ($mes) {

        case 1:
            $signo = "Capricornio";
            if ($dia > 19) {
                $signo = "Acuario";
            }
            break;
        case 2:
            $signo = "Acuario";
            if ($dia > 17) {
                $signo = "Piscis";
            }
            break;
        case 3:
            $signo = "Piscis";
            if ($dia > 19) {
                $signo = "Aries";
            }
            break;
        case 4:
            $signo = "Aries";
            if ($dia > 19) {
                $signo = "Tauro";
            }
            break;
        case 5:
            $signo = "Tauro";
            if ($dia > 20) {
                $signo = "Géminis";
            }
            break;
        case  6:
            $signo = "Géminis";
            if ($dia > 20) {
                $signo = "Cáncer";
            }
            break;
        case 7:
            $signo = "Cáncer";
            if ($dia > 22) {
                $signo = "Leo";
            }
            break;
        case 8:
            $signo = "Leo";
            if ($dia > 22) {
                $signo = "Virgo";
            }
            break;
        case 9:
            $signo = "Virgo";
            if ($dia > 22) {
                $signo = "Libra";
            }
            break;
        case 10;
            $signo = "Libra";
            if ($dia > 22) {
                $signo = "Escorpio";
            }
            break;
        case 11:
            $signo = "Escorpio";
            if ($dia > 21) {
                $signo = "Sagitario";
            }
            break;
        case 12:
            $signo = "Sagitario";
            if ($dia > 21) {
                $signo = "Capricornio";
            }
            break;
    }

    echo "El signo Zodical que corresponde a <b> $dia </b> y al mes <b> $mes </b> es:<b>" . $signo . "</b>"
?>