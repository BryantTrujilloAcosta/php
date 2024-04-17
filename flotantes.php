<?php
$x = 10.365;
var_dump($x);
echo"<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de los primeros N números naturales</title>
</head>
<body>
    <form method="get">
        <label for="numero">Ingrese el valor de N (opcional):</label><br>
        <input type="number" id="numero" name="numero"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if(isset($_GET['numero'])) {
        $n = $_GET['numero'];
    } else {
        $n = 10; // Valor por defecto si no se proporciona ningún valor para N
    }

    $suma = 0;
    for ($i = 1; $i <= $n; $i++) {
        $suma += $i;
    }
    echo "<h2>La suma de los primeros $n números naturales es: $suma</h2>";
    ?>
</body>
</html>