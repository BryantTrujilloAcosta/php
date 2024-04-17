<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambitos de las variables</title>
</head>

<body>
    <?php
    $x = 5;
    function myTest()
    {
        $y = 10;//ambito local
        echo "<p>Variables de prueba dentro de una función:<p>";
        echo "variable x es: $y";
        echo "<br>";
        echo "variable y es: $y";
    }
    myTest();
    echo "<p>Variables de prueba fuera de una funcion:<p>";
    echo "Variable x es: $x";
    echo "<br>";
    echo "variable y es: $y";

    $x = 5;
    $y = 10;
    function myTest2()
    {
        global $x, $y;
        $y = $x + $y;
    }
    myTest2();
    echo $y;
    ?>
</body>

</html>