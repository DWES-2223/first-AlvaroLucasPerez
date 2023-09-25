<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taula de Persones</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Alçada</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $persones = [
                ['nom' => 'Aitor', 'altura' => 172, 'email' => 'aitoraventuras@correo.com'],
                ['nom' => 'Anthony', 'altura' => 165, 'email' => 'anthony12@correo.com'],
                ['nom' => 'Willy', 'altura' => 180, 'email' => 'willyrex@correo.com'],
                ['nom' => 'Dani', 'altura' => 160, 'email' => 'danimelenillas@correo.com'],
                ['nom' => 'Carlos', 'altura' => 177, 'email' => 'carloscap@correo.com']
            ];


            foreach ($persones as $persona) {
                echo '<tr>';
                echo '<td>' . $persona['nom'] . '</td>';
                echo '<td>' . $persona['altura'] . '</td>';
                echo '<td>' . $persona['email'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
