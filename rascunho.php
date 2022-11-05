function checa_numero_escondido($numero,$numeroOculto) {
  
  if(($numero == "" || $numeroOculto == "") || !str_contains($numero, $numeroOculto)){
      return false;
  } else {
      $numero = str_split($numero);
      $numero_verificacao = "";

      for($i = 0; $i < sizeof($numero); $i++){
          if(str_contains($numeroOculto, $numero[$i])){
              $numero_verificacao .= "$numero[$i]";
              if($numero_verificacao == $numeroOculto) {
                  return true;
              }
          }
      }
      return false;
  }  
}

$numero = '';
$numeroOculto = '153';

$checar = checa_numero_escondido($numero,$numeroOculto);
if ($checar) {
echo "O número $numero esconde o $numeroOculto. ";
} else {
echo "O número $numero NÃO esconde o $numeroOculto. ";
}