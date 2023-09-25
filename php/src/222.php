<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 222</title>
</head>
<body>
<?php
if (isset($_GET['base']) && isset($_GET['exponent'])) {
    $base = $_GET['base'];
    $exponent = $_GET['exponent'];

    $resultado = 1;

    for ($i = 1; $i <= $exponent; $i++) {
        $resultado *= $base;
    }

    echo "<p>$base^$exponent = $resultado</p>";
} else {
    echo "<p>Posa la base i l'exponent a les variables base i exponent pel QueryString</p>";
}
?>
</body>
</html>