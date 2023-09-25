<!DOCTYPE html>
<html lang="en">
<?php
$nombre = "Álvaro";
$apellido1 = "Lucas";
$apellido2 = "Pérez";
$email = "alvarolucasperez@gmail.com";
$birthday = "2003";
$telefono = 620302772;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 202</title>
</head>
<body>
    <table>
        <tr>
            <td>Nom</td>
            <td><?=$nombre?></td>
        </tr>
        <tr>
            <td>Cognoms</td>
            <td><?=$apellido1.' '.$apellido2?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?=$birthday?></td>
        </tr>
        <tr>
            <td>Telèfon</td>
            <td><?=$telefono?></td>
        </tr>

    </table>
</body>
</html>