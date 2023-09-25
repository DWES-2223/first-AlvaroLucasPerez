<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 224</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantitat = isset($_POST["quantitat"]) ? intval($_POST["quantitat"]) : 0;

        echo '<form action="224.php" method="post">';
        for ($i = 0; $i < $quantitat; $i++) {
            echo '<label for="quantitat' . $i . '">Ingrese el valor ' . $i . ':</label>';
            echo '<input type="number" name="quantitat' . $i . '" id="quantitat' . $i . '"><br>';
        }
        echo '<input type="hidden" name="quantitat" value="' . $quantitat . '">';
        echo '<input type="submit" name="submit" value="Calcular">';
        echo '</form>';

        $total = 0;
        for ($i = 0; $i < $quantitat; $i++) {
            $inputName = 'quantitat' . $i;
            if (isset($_POST[$inputName])) {
                $total += intval($_POST[$inputName]);
            }
        }
        echo '<p>Total: ' . $total . '</p>';  
    }
    ?>
</body>
</html>
