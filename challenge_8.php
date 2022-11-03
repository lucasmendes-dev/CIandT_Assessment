<?php

function escolhe_taxi($tf1,$vqr1,$tf2,$vqr2) {

    $distância = 10;

    $tf1 = floatval($tf1);
    $vqr1 = floatval($vqr1);
    $tf2 = floatval($tf2);
    $vqr2 = floatval($vqr2);

    $empresa1 = $tf1 + ($vqr1 * $distância);
    $empresa2 = $tf2 + ($vqr2 * $distância);

    if($empresa1 == $empresa2){
        return "Tanto faz";
    } else if ($empresa1 < $empresa2) {
        return "Empresa 1";
    } else if ($empresa1 > $empresa2) {
        return "Empresa 2";
    } 

}


$tf1 = '2.50';
$vqr1 = '1.0';
$tf2 = '5.0';
$vqr2 = '0.75';

$empresa_escolhida = escolhe_taxi($tf1,$vqr1,$tf2,$vqr2);
echo $empresa_escolhida;

?>