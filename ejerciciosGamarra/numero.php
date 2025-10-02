<?php
$numero = $_POST['txtNumero'];
$numeroN = $numero*($numero+1)/2;

//Los primeros N numeros:
$i = 1;
while ($i<=$numero){
    echo "El numero es: " . $i . "<br>";
    $i++;
}




//La suma de los N primeros numeros:
echo "La suma de los primeros " .$numero . " numeros es: " . $numeroN;

?>