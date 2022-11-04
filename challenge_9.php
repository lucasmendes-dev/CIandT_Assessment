<?php

function menor_string_maior($name) {

  $array = str_split($name);

  $invertidas[] = array_pop($array);
  $invertidas[] = array_pop($array);
  
  $array[] = $invertidas[0];
  $array[] = $invertidas[1];

  return $array;


}

$name = "abcde";

$result = menor_string_maior($name);
print_r($result);

?>