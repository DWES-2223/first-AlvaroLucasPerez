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

function vocals(string $cadena):array {
    $vocals = ['a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0];
    $filtre = strtolower(eliminar_tildes($cadena));
    foreach ($vocals as $vocal => $times){
        $vocals[$vocal] = substr_count($filtre,$vocal);
    }
    return $vocals;
}

function desplacament(string  $cadena, int $des){
    if ($des < 0){
        return 'El desplaçament no pot ser negatiu';
    }
    $abecedario = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
    $resultado = '';
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = strtoupper($cadena[$i]);
        if(ctype_alpha($caracter)){
            $indice = strpos($abecedario,$caracter);
            $indiceNuevo = ($indice + $des) % 26;
            $nuevaLetra = $abecedario[$indiceNuevo];
            $resultado .= $nuevaLetra;
        }else{
            $resultado .= $caracter;
        }
    }
    return  $resultado;
}
function fecha_inglesa($date){
    $fechaPartida = explode('.',$date);
    return $fechaPartida[2] . '/' . $fechaPartida[1] . '/' . $fechaPartida[0];
}

function vell($array){
    $fechaMasVieja = null;
    $llaveFechaMasVieja = null;

    foreach ($array as $llave => $fecha){
        $fechaIngles = fecha_inglesa($fecha);
        $fechaConvertida = strtotime($fechaIngles);
        if($fechaConvertida < $fechaMasVieja || $fechaMasVieja === null){
            $fechaMasVieja = $fechaConvertida;
            $llaveFechaMasVieja = $llave;
        }
    }
    return $llaveFechaMasVieja;
}

function laureado($array){
    $vecesRepetidas = array_count_values($array);
    arsort($vecesRepetidas);
    $masRepetido = reset($vecesRepetidas);
    $valorMasRepetido = array_keys($vecesRepetidas,$masRepetido);
    return$valorMasRepetido[0];
}

function any($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2];
}

function jove($nacimientos, $fechas){
    $atletaMasJoven = null;
    $menorDiferencia = null;
    $atletasMasJovenArray = [];
    foreach ($nacimientos as $indice => $natalici){
        $fecha = $fechas[$indice];
        $anyoRecord = any($fecha);
        $diferencia = $anyoRecord - intval($natalici);
        if ($diferencia < $menorDiferencia || $menorDiferencia === null){
            $menorDiferencia = $diferencia;
            $atletaMasJoven = $indice;
        }
    }
    $atletasMasJovenArray = [$atletaMasJoven,$menorDiferencia];
    return $atletasMasJovenArray;
}
function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}

?>
