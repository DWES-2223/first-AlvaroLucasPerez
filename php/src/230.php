<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 230</title>
</head>
<body>
    <ul>
    <?php
    $numeros = array();
    for($i = 0; $i < 50; $i++){
        $numero = rand(0,99);
        $numeros[] = $numero;
    } 

    foreach($numeros as $numero) {
        echo "<li>$numero</li>";
    }
    ?>
    </ul>
</body>
</html>