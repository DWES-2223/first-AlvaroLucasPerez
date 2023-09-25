<!DOCTYPE html>
<html lang="en">

<?php
    extract($_POST);
    const ABECEDARI = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S',
        'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
?>

<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
</head>
<body>
<table>
    <?php
        if (isset($files,$columnes)) {
            for ($i = 0; $i < $files; $i++) {
                $letraColumna = ABECEDARI[$i];
                echo "<tr> ";
                for ($j = 1; $j <= $columnes; $j++) {
                    echo "<td>${letraColumna}$j</td> ";
                }
                echo "</tr> ";
            }
        } else {
            echo "Posa el valor de le files i les columnes en el QueryString";
        }
    ?>
</table>
</body>
</html>
