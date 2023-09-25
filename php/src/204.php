<?php

define('DIEZ', 10);
$edat = $_GET['edat']??null;
$edaddiezañosmas = $edat + DIEZ;
$edaddiezañosmenos = $edat - DIEZ;
$edadañoatras = date('Y') - DIEZ;
$edadañosadelante = date('Y') + DIEZ;
$edadjubilacion = date('Y') + (67 - $edat);


?>
<body>
    <?php
    if(isset($edat)){
        echo "La teua edad despres de 10 anys sera $edaddiezañosmas<br>";
        echo "La teua edad 10 anys abans $edaddiezañosmenos<br>";
        echo "La teua edad de jubilació es $edadjubilacion<br>";
    } else {
        echo "Posa la teu edat actual a la variable edat pel QueryString";
    }
    ?>
</body>


