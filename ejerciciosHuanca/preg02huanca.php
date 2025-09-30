<?php
    $numMes = $_POST["txtNumeroMes"];
    $trimestre = "";



    switch ((int)$numMes) {

        case $numMes <= 3:
            $trimestre = "Primer";
            break;
        case $numMes > 3 && $numMes <= 6:
            $trimestre = "Segundo";

        case $numMes > 6 && $numMes <= 9:
            $trimestre = "Tercer";

        case $numMes > 9 && $numMes <= 12:
            $trimestre = "Cuarto";
    }

    echo "El número de mes <b> $numMes </b> corresponde al: <b>" . $trimestre . "</b> trimestre del año."
?>