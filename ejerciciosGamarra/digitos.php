<?php
    $num = $_POST['txtDigiito'];
    $index = str_split($num);
    $digi = count($index);
    echo "El numero: " . $digi;
?>