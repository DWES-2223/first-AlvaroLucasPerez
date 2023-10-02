<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 272</title>
</head>
<body>
<?php
    include ('atletes.php');
    include ('functions.php');
    global $records;

    $datesOfBirth = array_column_ext($records, 'natalici', -1);
    $clubs = array_column_ext($records, 'club', -1);
    $cities = array_column_ext($records, 'lloc', -1);
    $athletes = array_column_ext($records, 'atleta', -1);

    $oldestRecordDate = vell(array_column_ext($records, 'data', -1));
    $mostSuccessfulClub = laureado($clubs);
    $mostSuccessfulCity = laureado($cities);
    $mostSuccessfulAthlete = laureado($athletes);
    list($youngestAthleteIndex, $youngestAge) = jove($datesOfBirth, array_column_ext($records, 'data', -1));
    $youngestAthleteName = $records[$youngestAthleteIndex]['atleta'];
?>
<p>Record més antic: <?= $oldestRecordDate ?></p>
<p>Club amb més títols: <?= $mostSuccessfulClub ?></p>
<p>Ciutat més propicia: <?= $mostSuccessfulCity ?></p>
<p>Persona amb més records: <?= $mostSuccessfulAthlete ?></p>
<p>Mes jove en aconsegir el record: <?= $youngestAthleteName ?> - <?= $youngestAge ?> anys</p>
<?php
    include ('270a.php');
?>
</body>
</html>

