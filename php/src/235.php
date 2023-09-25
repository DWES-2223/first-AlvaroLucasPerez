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
                ['nom' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'],
                ['nom' => 'Maria', 'altura' => 165, 'email' => 'maria@correo.com'],
                ['nom' => 'Joan', 'altura' => 175, 'email' => 'joan@correo.com'],
                ['nom' => 'Laura', 'altura' => 160, 'email' => 'laura@correo.com'],
                ['nom' => 'Carlos', 'altura' => 170, 'email' => 'carlos@correo.com']
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
