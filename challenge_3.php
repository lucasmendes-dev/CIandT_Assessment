<?php

function calcula_numero_da_senha($valores) {

    $digitos = [];
    $zeros = 0;
    $um = 0;

    for($i = 0; $i < sizeof($valores); $i++) {
        for($j = 0; $j < sizeof($valores); $j++) {
                if($valores[$j][$i] == 0) {
                    $zeros += 1;                    
                } else {
                    $um += 1;
                }                 
        }
        if($um >= $zeros) {
            $digitos[] = 1;
        } else {
            $digitos[] = 0;
        }
        $zeros = 0;
        $um = 0;          
 
    }
    
    $digitos = implode("", $digitos);
    return bindec($digitos);
}


$valores = [
    "0110100000",    
    "1001011111",
    "1110001010",
    "0111010101",
    "0011100110",
    "1010011001",
    "1101100100",
    "1011010100",
    "1001100111",
    "1000011000"
];

$resultado = calcula_numero_da_senha($valores);
echo "A senha binária das colunas gerou o valor decimal de: $resultado ";


?>