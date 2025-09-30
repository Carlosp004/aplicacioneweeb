<?php
    $numSemana = $_POST["txtNumeroSemana"];
    $dia = "";

    switch ($numSemana) {

        case "1":
            $dia = "Lunes";
            break;
        case "2":
            $dia = "Martes";
            break;

        case "3":
            $dia = "Miércoles";
            break;

        case "4":
            $dia = "Jueves";
            break;

        case "5":
            $dia = "viernes";
            break;

        case "6":
            $dia = "Sábado";
            break;

        case "7":
            $dia = "Domingo";
            break;
    }

    echo "El número <b> $numSemana </b> corresponde a: <b>" . $dia . "<b>"

?>