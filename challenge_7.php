<?php 

function calcula_total_leds($altura,$largura) {
    
    if($altura == 0 || $largura == 0) {
      return 0;
    }
    $total_leds = ($altura + 1) * ($largura + 1);
    return $total_leds;
}

$altura = 4;
$largura = 7;

$result = calcula_total_leds($altura, $largura);
echo "Um painel com $altura cm de altura e $largura cm de largura terá $result LEDs. ";

?>