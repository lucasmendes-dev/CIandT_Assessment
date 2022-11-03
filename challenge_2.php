<?php

function retorna_menor_e_maior_valor_de_vendas($lista_vendas) {
  
    $menor = 100;
    $maior = 0;      
    $menor_maior = [];
    
    foreach($lista_vendas as $vendas) {
      foreach($vendas as $venda) {
        if($venda > $maior && $venda < 600) {
          $maior = $venda;
        } else if ($venda < $menor && $venda > 0){
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
      [315, 0, 100],
      [],
      [450, 25, 90]
    ];
  
  $result = retorna_menor_e_maior_valor_de_vendas($lista_vendas);
  
  echo "O menor valor de vendas é: R$$result[0] e o maior é: R$$result[1] ";

?>