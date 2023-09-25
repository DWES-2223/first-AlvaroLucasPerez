<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 231</title>
</head>
<body>
    <h1> Operacion Con Arrays aleatorios </h1>
    <?php
    $numeros = array();
    for($i = 0; $i < 50; $i++){
        $numero = rand(0,99);
        $numeros[] = $numero;
    } 

    echo "<p>Array: [" . implode(', ', $numeros) . "]</p>";

    $numMayor = max($numeros);
    $numMenor = min($numeros);
    $media = array_sum($numeros) / count($numeros);
    round($media);

    echo "<p> El numero maximo es $numMayor </p>";
    echo "<p> El numero maximo es $numMenor </p>";
    echo "<p> La media es $media </p>"
    ?>
</body>
</html>