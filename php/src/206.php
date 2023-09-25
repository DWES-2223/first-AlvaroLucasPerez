<!DOCTYPE html>
<html lang="en">
<?php
$numero = $_GET['numero']??null;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 206</title>
</head>
<body>
<?php
if(isset($numero)){
    if($numero > 0) {
        echo "El número $numero és positiu";
    } else if($numero < 0) {
        echo "El número $numero és negatiu ";
    } else if($numero == 0) {
        echo "El número $numero és zero";
    } 
} else {
    echo "Posa el numero a comprobar a la variable numero del QueryString";
}
?>
</body>
</html>