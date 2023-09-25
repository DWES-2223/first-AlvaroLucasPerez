<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 223</title>
</head>
<body>
<?php
if (isset($_GET['nombre'])) {
    $numero = $_GET['nombre'];
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>a</th><th>*</th><th>b</th><th>=</th><th>a*b</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr> <td>$numero</td> <td>*</td> <td>$i</td> <td>=</td> <td>$resultado</td> </tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Posa el nombre pel QueryString</p>";
}
?>
</body>
</html>