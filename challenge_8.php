<?php

    function escolhe_taxi($tf1,$vqr1,$tf2,$vqr2) {

    $distancia1 = 15.0;
    $distancia2 = 7.0;

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
    $fixa = $tf1 - $tf2;
    $km = $vqr1 - $vqr2;
    
    $taxa_igual = abs($fixa / $km);
    $taxa_igual = number_format((float)$taxa_igual, 2, '.');
    if(fmod($taxa_igual, 1) == 0.00){
        $taxa_igual = number_format((float)$taxa_igual, 1, '.');
    } 
    
    return "Empresa 1 quando a distância < $taxa_igual, Tanto faz quando a distância = $taxa_igual, Empresa 2 quando a distância > $taxa_igual";
    }
}


$tf1 = '2.50';
$vqr1 = '1.0';
$tf2 = '5.0';
$vqr2 = '0.75';

$empresa_escolhida = escolhe_taxi($tf1,$vqr1,$tf2,$vqr2);
echo $empresa_escolhida;
