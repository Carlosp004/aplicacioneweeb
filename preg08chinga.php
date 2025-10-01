<?php

$colegio = $_POST["txtcolegio"];
$nsocial = $_POST["txtnsocial"];
$importe = 0;

switch ($colegio) {
    case "N":
        if ($nsocial == "A") {
            $importe = 300;
        }

        if ($nsocial == "B") {
            $importe = 200;
        }

        if ($nsocial == "C") {
            $importe = 100;
        }

        break;

    case "P":
        if ($nsocial == "A") {
            $importe = 400;
        }

        if ($nsocial == "B") {
            $importe = 300;
        }

        if ($nsocial == "C") {
            $importe = 200;
        }

        break;
}


echo "<p>Colegio: " . $colegio . "</p>";
echo "<p>Importe a pagar: S/. " . $importe . "</p>";

