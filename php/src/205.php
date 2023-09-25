<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>205.php</title>
</head>
<body>
<?php

if (isset($_GET['quantitat'])) {
    $quantitat = (int)$_GET['quantitat'];
    $billetes = [500, 200, 100, 50, 20, 10, 5, 2, 1];

    foreach ($billetes as $valor) {
        if ($valor >= 5) {
            $quantitatBilletes = intdiv($quantitat, $valor);

            if ($quantitatBilletes > 0) {
                $tipo = 'bitllet';
                $plural = ($quantitatBilletes > 1) ? 's' : '';

                echo "$quantitatBilletes $tipo$plural de $valor<br>";
            }

            $quantitat %= $valor;
        } else {
            $quantitatMonedas = intdiv($quantitat, $valor);

            if ($quantitatMonedas > 0) {
                $tipo = 'moned';
                $plural = ($quantitatMonedas > 1) ? 'es' : 'a';

                echo "$quantitatMonedas $tipo$plural de $valor<br>";
            }

            $quantitat %= $valor;
        }
    }
} else {
    echo "<p>Posa la quantitat a la variable quantitat pel QueryString</p>";
}
?>
</body>
</html>