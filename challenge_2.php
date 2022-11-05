<?php

function retorna_menor_e_maior_valor_de_vendas($lista_vendas) {
  
  $menor = 0;
  $maior = 0;   
  $min = 20;
  $max = 500;   
  $menor_maior = [];
    
  foreach($lista_vendas as $vendas) {
    foreach($vendas as $venda) {      
      if($venda == 0) {
        continue;
      } else if(($maior == 0 && $menor == 0) && ($venda > $min && $venda < $max)){

          $maior = $venda;
          $menor = $venda;

      } else if(($venda >= $min && $venda <= $max) && $venda > $maior) {
          $maior = $venda;
      } else if (($venda >= $min && $venda <= $max) && $venda < $menor){
          $menor = $venda;
      }
    }
  }

  $menor_maior[] = $menor;
  $menor_maior[] = $maior;
    
  return $menor_maior;
}
  
  $lista_vendas = [
      [50, 301, 140],
      [315, 0, 10],
      [15, 68, 220],
      [500, 20, 90]
    ];
  
  $result = retorna_menor_e_maior_valor_de_vendas($lista_vendas);
  
  echo "O menor valor de vendas é: R$$result[0] e o maior é: R$$result[1] ";

?>