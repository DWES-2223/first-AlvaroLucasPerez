<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 208</title>
</head>
<body>
<?php
$edat = isset($_GET['edat']) ? (int)$_GET['edat'] : null;

if($edat !== null)  {
    $mensaje = match (true) {
        $edat < 3 => "ets un bebé",
        $edat >= 3 && $edat <= 12 => "ets un xiquet",
        $edat >= 13 && $edat <= 17 => "ets un adolescent",
        $edat >= 18 && $edat <= 66 => "ets un adult",
        $edat >= 67 => "ets un jubilat"
    };
    echo $mensaje;
} else {
    echo "<p>Posa la teu edat actual a la variable edat pel QueryString</p>";
}
?>
</body>
</html>