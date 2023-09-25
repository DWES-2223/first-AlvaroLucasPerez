<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 221</title>
</head>
<body>
    <?php
        $total = 0;
        for($i = 1; $i <= 10; $i++){
            $total += $i;
            if ($i < 10){
                echo "$i+";
            }else{
                echo "$i";
            }
        }
        echo "=$total"; 
    ?>  
</body>
</html>