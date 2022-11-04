<?php

function shuffle_musicas($musicasTocadas) {

  $ordem = [];
  
  rsort($musicasTocadas);

  while ($musicasTocadas){

    $ordem[] = array_shift($musicasTocadas);
    
    if($musicasTocadas) {
      $ordem[] = array_pop($musicasTocadas);
    }

  }


  return $ordem;

}


$lista_pesos = [2, 10, 5, 3];
$embaralhador = shuffle_musicas($lista_pesos);

print_r($embaralhador);



?>