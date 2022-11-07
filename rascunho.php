function checa_numero_escondido($numero,$numeroOculto) {

if(!is_numeric($numero) || !is_numeric($numeroOculto)){
  return false;
} else if($numero === $numeroOculto) {
    return true;
}  else {
    $numero = str_split($numero);
    $numero_verificacao = "";
    for($i = 0; $i < sizeof($numero); $i++){   
        if(str_contains($numeroOculto, $numero[$i])){  
          if(str_contains($numero_verificacao, $numero[$i])){
            continue;
          }
          $numero_verificacao .= $numero[$i];
          if($numero_verificacao == $numeroOculto) {
              return true;
          }
        }
    }        
    echo $numero_verificacao;
    return false;
}  
}

$numero = "12310";
$numeroOculto = "21";


$checar = checa_numero_escondido($numero,$numeroOculto);
echo $checar;
