<?php

function checa_numero_escondido($numero,$numeroOculto) {
  
    if(!is_numeric($numero) || !is_numeric($numeroOculto)){
        echo "oi";
        return false;
    } else {
        $numero = str_split($numero);
        $numero_verificacao = "";
  
        for($i = 0; $i < sizeof($numero); $i++){
            if(str_contains($numeroOculto, $numero[$i])){
                $numero_verificacao .= "$numero[$i]";
                if($numero_verificacao == $numeroOculto) {
                    echo "oi2";
                    return true;
                    
                }
            }
        }
        echo "oi3";
        return false;
    }  
}

$numero = "abs";
$numeroOculto = 244;
  
$checar = checa_numero_escondido($numero,$numeroOculto);
if ($checar) {
  echo "O número $numero esconde o $numeroOculto. ";
} else {
  echo "O número $numero NÃO esconde o $numeroOculto. ";
}

?>