<?php

function checa_numero_escondido($numero,$numeroOculto) {
  
    if(!is_numeric($numero) || !is_numeric($numeroOculto)){
        return false;
    } else {

        $aux = $numeroOculto;
        $numero = str_split($numero);
        $numeroOculto = str_split($numeroOculto);
        $result = "";

        for($i = 0; $i < sizeof($numero); $i++) {
            if($numero[$i] == $numeroOculto[0]){

                $result .= array_shift($numeroOculto);
                
            }
            if(!$numeroOculto) {
                break;
            }
        }
        
        if($result == $aux) {
            return true; 
        } else {
            return false;
        }
    }
      
}

$numero = "12310";
$numeroOculto = "21";
  
$checar = checa_numero_escondido($numero,$numeroOculto);
print_r($checar);


?>