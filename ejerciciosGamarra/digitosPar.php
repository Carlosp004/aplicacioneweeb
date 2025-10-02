<?php
    $digiPar = $_POST['txtDigiitoPar'];
    $arrayP = str_split($digiPar);
    $par= array_filter($arrayP, function($numero){
        return $numero % 2 == 0;
    });
    $cPar = count($par);
    echo "Pares: " . $cPar;

?>