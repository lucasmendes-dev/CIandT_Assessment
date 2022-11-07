<?php

function calcula_top_ocorrencias_de_queries($texto,$queries,$k) {
  
    $maior = 0;
    $segundo_maior = 0;
    $terceiro_maior = 0;

    foreach($queries as $query){
        $termos_pos[] = substr_count($texto, $query);
        $terms[] = $query;
    }
      
    for($i = 0; $i < sizeof($termos_pos); $i++) {
        if($termos_pos[$i] > $maior) {
            $maior = $termos_pos[$i];
            $maior_term = $terms[$i];
        }        
    }
    

    for($i = 0; $i < sizeof($termos_pos); $i++) {
        if($termos_pos[$i] > $segundo_maior && $termos_pos[$i] < $maior) {
            $segundo_maior = $termos_pos[$i];
            $segundo_maior_term = $terms[$i];
        }        
    }

    for($i = 0; $i < sizeof($termos_pos); $i++) {
        if($termos_pos[$i] > $terceiro_maior && $termos_pos[$i] < $segundo_maior) {
            $terceiro_maior = $termos_pos[$i];
            $terceiro_maior_term = $terms[$i];
        }        
    }

    $result[] = $maior_term;
    $result[] = $segundo_maior_term;
    $result[] = $terceiro_maior_term;

    return array_slice($result, 0, $k);
}


//---------------------------------------------------------------//

$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua";

$queries = ["a", "em", "i", "el"];

$k = 3;

$result = calcula_top_ocorrencias_de_queries($texto, $queries, $k);
print_r($result);

?>