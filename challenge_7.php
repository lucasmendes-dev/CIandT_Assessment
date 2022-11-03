<?php 

function calcula_total_leds($altura,$largura) {

    $total_leds = ($altura + 1) * ($largura + 1);
    return $total_leds;

}


$altura = 4;
$largura = 7;

$result = calcula_total_leds($altura, $largura);
echo $result;

?>