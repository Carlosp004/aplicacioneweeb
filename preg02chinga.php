<?php

$num01 = (int) $_POST['num01'];
$num02 = (int) $_POST['num02'];
$num03 = (int) $_POST['num03'];

if ($num03 == ($num01 + $num02)) {
    $resultado = "El tercer número ($num03) es IGUAL a la suma de $num01 + $num02.";
} else {
    $resultado = "El tercer número ($num03) NO es IGUAL a la suma de $num01 + $num02.";
}
echo $resultado;
?>

