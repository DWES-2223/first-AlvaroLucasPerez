<?php
function esParell(int $num) : bool {
    return $num % 2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array{
    $array= [];
    for ($i=0; $i < $tam; $i++) { 
        $array[] = rand($min, $max);
    }
    return $array;

}

function countParells(array &$array): int {
    $contador = 0;
    foreach($array as $valor) {
        if($valor % 2 == 0){
            $contador++;
        }
    }

    return $contador;
}

function major() : int {
    $numeros = func_get_args();
    $major = $numeros[0];

    foreach($numeros as $numero) {
        if($numero > $major) {
            $major = $numero;
        }
    }

    return $major;
}

function concatenar(...$paraules) {
    return implode(' ', $paraules);
}

function digits(int $num) {
    $num = abs($num);
    return strlen((string)$num);
}

function digitsN(int $num, int $post) : int {
    $numStr = (string)$num;

    if($post < 1 || $post > strlen($num)){
        return false;
    }

    return (int)$numStr[$post - 1];
}

function llevaDarrere(int $num, int $cant): int {
    $numStr = (string)$num;
    
    if ($cant < 1 || $cant > strlen($numStr)) {
        return false; 
    }
    
    $nouNumStr = substr($numStr, 0, strlen($numStr) - $cant);
    return (int)$nouNumStr;
}


function llevaDavant(int $num, int $cant): int {
    $numStr = (string)$num;
    
    if ($cant < 1 || $cant > strlen($numStr)) {
        return false; 
    }
    
    $nouNumStr = substr($numStr, $cant);
    return (int)$nouNumStr;
}

function peseta2euros(float $quantitat, float $cotitzacio = 166): float {
    return $quantitat / $cotitzacio;
}

function euro2pesetes(float $quantitat, float $cotitzacio = 166): float {
    return $quantitat * $cotitzacio;
}

?>
