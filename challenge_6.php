<?php

function checa_numero_escondido($numero,$numeroOculto) {
  
    $numero = str_split($numero);
    $numero_verificacao = "";

    for($i = 0; $i < sizeof($numero); $i++){
        if(str_contains($numeroOculto, $numero[$i])){
            $numero_verificacao .= "$numero[$i]";
        }
    }

    if($numero_verificacao == $numeroOculto) {
        return true;
    } else {
        return false;
    }    
}

$numero = '12345';
$numeroOculto = '235';
  
$checar = checa_numero_escondido($numero,$numeroOculto);
echo $checar;

?>