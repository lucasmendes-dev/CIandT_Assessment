<?php

function ultima_parada($combustivel,$consumo,$postosDeGasolina) {
  
  $posto_mais_distante = 0;
  $distancia_possivel = $combustivel * $consumo;
  
  foreach($postosDeGasolina as $posto) {
    if($posto <= $distancia_possivel && $posto >= $posto_mais_distante) {
      $posto_mais_distante = $posto;
    }
  }
  
  if($posto_mais_distante){
    return $posto_mais_distante;
  } else{
    return -1;
  }    

}

$posto_distante = ultima_parada(2, 8, [2, 15, 22, 10.2]);

echo "O Posto mais distante está a $posto_distante Km!";

?>