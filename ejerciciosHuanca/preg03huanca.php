<?php
    (int)$numero = $_POST["txtNumero"];
    $mensaje = "";

    if ($numero >= 1 && $numero <= 10) {

        switch ($numero) {
            case "1":
                $mensaje = "I";
                break;

            case "2":
                $mensaje = "II";
                break;

            case "3":
                $mensaje = "III";
                break;

            case "4":
                $mensaje = "IV";
                break;

            case "5":
                $mensaje = "V";
                break;

            case "6":
                $mensaje = "VI";
                break;

            case "7":
                $mensaje = "VII";
                break;

            case "8":
                $mensaje = "VIII";
                break;

            case "9":
                $mensaje = "IX";
                break;

            case "10":
                $mensaje = "X";
                break;
        }
        echo "El número <b> $numero </b> representado en número romano es: <b>" . $mensaje . "</b>.";
    } else {
        $mensaje = "Error: Por favor ingrese un número entre 1 y 10. Ejemplo: 1, 2, 3...";
        echo $mensaje;
    }

?>
