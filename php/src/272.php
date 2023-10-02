<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 272</title>
</head>
<?php
    include ('atletes.php');
    include ('functions.php');
    global $records;
?>
<body>
<?php
$fechas = array_column_ext($records,'data',-1);
$club = array_column_ext($records,'club',-1);
$ciudades = array_column_ext($records,'lloc',-1);
$nacimientos = array_column_ext($records,'natalici',-1);
$atletas = array_column_ext($records,'atleta',-1);

$recordMasAntiguo = vell($fechas);
$clubMasLaureado = laureado($club);
$ciudadConMasTitulos = laureado($ciudades);
$personaMasLaureada = laureado($atletas);
$atletaMasJoven = jove($nacimientos,$fechas);
$nombreAtletasMasJoven = '';
foreach ($records as $record => $datos){
    if($record == $atletaMasJoven[0]){
        $nombreAtletasMasJoven = $records[$record]['atleta'];
    }
}
?>
<p>Record més antic:  <?= $recordMasAntiguo ?></p>
<p>Club amb més títols: <?= $clubMasLaureado ?></p>
<p>Persona amb més records: <?= $personaMasLaureada ?> </p>
<p>Ciutat més propicia: <?= $ciudadConMasTitulos?></p>
<p>Mes jove en aconsegir el record: <?= $nombreAtletasMasJoven?> - <?= $atletaMasJoven[1]?> anys</p>
<?php
include ('270a.php');
?>
</body>
</html>
