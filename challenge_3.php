<?php

function calcula_numero_da_senha($valores) {
    $zeros = 0;
    $um = 0;
    $digitos = [];

    foreach($valores as $valor) {

        $valor = str_split($valor);  //converter string pra array;
        foreach($valor as $num){
            if($num == 1) {
                $um += 1;
            } else {
                $zeros += 1;
            }
        }

        if($um >= 5){
            $digitos[] = "1";
        } else {
            $digitos[] = "0";
        }
        
        $zeros = 0; //resetar contador;
        $um = 0; //resetar contador;
    }

    return implode("", $digitos);
}


$valores = [
    "0110100000",    //coloquei valores em string ("") pra ficar mais fácil a conversão;
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

$senha_binaria = calcula_numero_da_senha($valores);
$result = bindec($senha_binaria); //função que converte binário para decimal;

echo "A senha Binária '$senha_binaria' convertida para decimal, dá o resultado de: $result ";


?>