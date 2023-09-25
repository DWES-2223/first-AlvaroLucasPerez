<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 207</title>
</head>
<body>
<?php
    $numero1 = isset($_GET['numero1']) ? (int)$_GET['numero1'] : null;
    $numero2 = isset($_GET['numero2']) ? (int)$_GET['numero2'] : null;
    $numero3 = isset($_GET['numero3']) ? (int)$_GET['numero3'] : null;
    
    if ($numero1 !== null && $numero2 !== null && $numero3 !== null) {
        $mayor = ($numero1 > $numero2) ? (($numero1 > $numero3) ? $numero1 : $numero3) : (($numero2 > $numero3) ? $numero2 : $numero3);
        echo "El nombre més gran entre $numero1, $numero2 i $numero3 és el $mayor";
    } else {
        echo "<p>Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString</p>";
    }
?>
</body>
</html>
