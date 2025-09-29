<?php

$año = (int) $_POST["numbAño"];
if ($año == 2025) {
    $resultado = "PRESENTE";
} elseif ($año < 2025) {
    $resultado = "PASADO";
} else {
    $resultado = "FUTURO";
}
echo $resultado;
?>