<?php
$numMayor = $_POST['txtMayor'];
$digis = str_split($numMayor);
$mayor = 0;
foreach ($digis as $ad){
    if($ad>$mayor){
        $mayor=$ad;
    }
}

echo "El mayor: " . $mayor;


?>