<?php

//Para este exercício foram usados valores da tabela ASCII, através da função "ord" do PHP.
function menor_string_maior($name) {

  if($name == ""){

    return "sem resposta";
    
  } else {
    
    $array = str_split($name);
    $verify = 0;

      for($i = (sizeof($array) - 1); $i >= 1; $i--){  
        if(ord($array[$i]) > ord($array[$i - 1])) {
          $aux = $array[$i - 1];
          $array[$i - 1] = $array[$i];
          $array[$i] = $aux;
          $verify = $array[$i - 1];
          break;
        } else if ($i == 1 && $array[$i] < $array[$i - 1]) {
          return "sem resposta";
        } 
      }

      for($j = (sizeof($array) - 1); $j >= 1; $j--){ 
        if(ord($array[$j]) < ord($array[$j - 1]) && $array[$j - 1] != $verify) {
          $aux = $array[$j - 1];
          $array[$j - 1] = $array[$j];
          $array[$j] = $aux;    
        } else {
          break;
        }
      } 

      for($j = (sizeof($array) - 1); $j >= 1; $j--){ 
        if(ord($array[$j]) < ord($array[$j - 1]) && $array[$j - 1] != $verify) {
          $aux = $array[$j - 1];
          $array[$j - 1] = $array[$j];
          $array[$j] = $aux;    
        } else {
          break;
        }
      }


    return implode("", $array);
  }

}

$name = "nextgen";

$result = menor_string_maior($name);
print_r($result);

?>