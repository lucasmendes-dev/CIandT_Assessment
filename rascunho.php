//Para este exercício foram usados valores da tabela ASCII, através da função "ord" do PHP.
function menor_string_maior($name) {

  if($name == ""){

    return "sem resposta";
    
  } else {
    
    $array = str_split($name);

    for($i = (sizeof($array) - 1); $i >= 1; $i--){  
      if(ord($array[$i]) > ord($array[$i - 1])) {
        $aux = $array[$i - 1];
        $array[$i - 1] = $array[$i];
        $array[$i] = $aux;
        break;
      } else if ($i == 1 && $array[$i] < $array[$i - 1]) {
        return "sem resposta";
      } 
    }


    return implode("", $array);
  }

}

$name = "nextgen";

$result = menor_string_maior($name);
print_r($result);

