<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3</title>
</head>

<body>
    <?php

    $i = 1;
    echo "Números del 1 al 10";
    echo "<br>";
    while ($i <= 10) {
        echo $i . " ";
        $i++;
    }
    echo "<br>";
    echo "Números del 60 al 70";
    echo "<br>";
    $i = 60;
    while ($i <= 70) {
        echo $i . " ";
        $i++;
    }
    echo "<br>";
    echo "Números del 20 al 1";
    echo "<br>";
    for ($i = 20; $i >= 1; $i--) {
        echo $i . " ";
    }
    echo "<br>";
    echo "Tabla del 5";
    echo "<br>";
    $multiplicando = 5;
    $multiplicador;
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        echo $multiplicando * $multiplicador;
        echo "<br>";
    }
    echo "TABLA DEL 5 con formato";
    $multiplicando = 5;
    $multiplicador;
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        echo "$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
        echo "<br>";
    }
    echo "<br>";
    echo "suma numeros del 1 al 100";
    echo "<br>";
    $contador = 1;
    $limite = 100;
    while ($contador <= $limite) {
        echo $contador . '<br />';
        $contador++;
    }
    ?>
</body>

</html>