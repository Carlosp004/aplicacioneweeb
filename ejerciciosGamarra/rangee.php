<?php
$rang1 = $_POST['txtRangom'];
$rang2 = $_POST['txtRangon'];

$i=$rang1;
if($rang1>$rang2){
    echo"Invierta los valores del rango";
} else {
    while ($i<=$rang2){
        if($i % 2 ==0){
            echo "Numero: " .$i ."<br>";
        }
        $i++;
    }
    
}
?>