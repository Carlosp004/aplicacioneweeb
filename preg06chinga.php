<?php

$temperatura = $_POST["numbTe"];
if ($temperatura >= 39) {
    $resultado = "Fiebre Alta: Diríjase al Centro de Salud más cercano. 🥵";
} elseif ($temperatura >= 37 && $temperatura <= 38) {
    $resultado = "Fiebre: Tómese una pastilla y repose. 🤒";
} elseif ($temperatura >= 35 && $temperatura <= 36) {
    $resultado = "Temperatura Normal. 😌";
} elseif ($temperatura < 35) {
    $resultado = "Temperatura muy baja: Tómese algo caliente. 🥶";
}
echo $resultado;
?>