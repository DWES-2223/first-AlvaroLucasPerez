<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 234</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Alçada</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $persones = array(
            "Persona1" => 175,
            "Persona2" => 160,
            "Persona3" => 180,
            "Persona4" => 165,
            "Persona5" => 170
        );

        $sumaAlçades = 0;
        $numPersones = count($persones);


        foreach ($persones as $nom => $alçada) {
            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td>$alçada</td>";
            echo "</tr>";


            $sumaAlçades += $alçada;
        }

        $alçadaMitjana = $sumaAlçades / $numPersones;


        echo "<tr>";
        echo "<td>Alçada Mitjana</td>";
        echo "<td>$alçadaMitjana</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>
