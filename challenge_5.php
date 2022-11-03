<?php

function calcula_porcentagem_sorteio($assinante,$minutosAssistidos) {
  
    $uma_hora = 60;
    $horas_assistidas = [];
    $porcentagem = [];
    
    for($i = 0; $i < sizeof($assinante); $i++) {
      if($assinante[$i] == False){
        $horas_assistidas[] = ceil($minutosAssistidos[$i] / $uma_hora);
      } else {
        $horas_assistidas[] = (ceil($minutosAssistidos[$i] / $uma_hora)) * 2;
      }
    }
    
    
    $soma_horas = array_sum($horas_assistidas);
  
    foreach($horas_assistidas as $percent){
      $porcentagem[] = intval(round(($percent / $soma_horas) * 100));
    }
    return $porcentagem;
  }
  
  
  $assinante = [True, False, False, False, True, False, True, True, False, False, False];
  $minutosAssistidos = [6144, 2742, 330, 30, 1500, 4032, 24036, 3288, 2076, 24540, 4716];
  
  $result = calcula_porcentagem_sorteio($assinante, $minutosAssistidos);
  print_r($result);  

?>