<?php

function escolhe_taxi($tf1,$vqr1,$tf2,$vqr2) {

    $distancia1 = 15;
    $distancia2 = 10;

    $tf1 = floatval($tf1);
    $vqr1 = floatval($vqr1);
    $tf2 = floatval($tf2);
    $vqr2 = floatval($vqr2);


    $empresa1_distancia1 = $tf1 + ($vqr1 * $distancia1);
    $empresa2_distancia1 = $tf2 + ($vqr2 * $distancia1);

    $empresa1_distancia2 = $tf1 + ($vqr1 * $distancia2);
    $empresa2_distancia2 = $tf2 + ($vqr2 * $distancia2);

    if(($empresa1_distancia1 == $empresa2_distancia1) && ($empresa1_distancia2 == $empresa2_distancia2)){
        return "Tanto faz";
    } else if (($empresa1_distancia1 < $empresa2_distancia1) && ($empresa1_distancia2 < $empresa2_distancia2)) {
        return "Empresa 1";
    } else if (($empresa1_distancia1 > $empresa2_distancia1) && ($empresa1_distancia2 > $empresa2_distancia2)) {
        return "Empresa 2";
    } else {
        if(($empresa1_distancia1 == $empresa2_distancia1) && ($empresa1_distancia2 < $empresa2_distancia2)) {
            return "Empresa 1 quando a distância for < $distancia1, tanto faz quando a distância = $distancia1, 
            Empresa 2 quando a distância > $distancia1";
        } else {
            return "Empresa 1 quando a distãncia for < $distancia2, tanto faz quando a distância = $distancia1, 
            Empresa 2 quando a distância > $distancia1";
        }
    }

}


$tf1 = '2.50';
$vqr1 = '1.0';
$tf2 = '5.0';
$vqr2 = '0.75';

$empresa_escolhida = escolhe_taxi($tf1,$vqr1,$tf2,$vqr2);
echo $empresa_escolhida;

?>