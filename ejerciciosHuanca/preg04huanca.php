<?php
    $sorteo = $_POST["txtSortear"];
    $bolilla = "";
    $premio = "";

    if ($sorteo == "ok") {

        $bolilla = rand(1, 5);
    }

    switch ((string)$bolilla) {

        case "1":
            $premio = "un: <b> Mouse";
            break;
        case "2":
            $premio = "un: <b> Teclado";
            break;
        case "3":
            $premio = "una: <b> Cámara Web";
            break;
        case "4":
            $premio = "unos: <b> Parlantes";
            break;
        case "5":
            $premio = "una: <b> Memoria USB";
            break;
    }

    echo "¡Felicidades! Ha obtenido la bolilla <b> $bolilla </b>, por lo tanto usted se lleva " . $premio . "</b>"
?>