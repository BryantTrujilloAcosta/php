<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero mayor</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        //verificar si el numero es válido
        if (!is_numeric($valor1) && !is_numeric($valor2) && !is_numeric($valor3)) {
            echo "Por favor, ingrese un número válido.";
        } else {
            //determinar cual es el numero mayor
            if ($valor1 > $valor2 && $valor1 > $valor3) {
                echo "El valor 1 = $valor1 es el mayor";
            }
            if ($valor2 > $valor1 && $valor2 > $valor3) {
                echo "El valor 2 = $valor2 es el mayor";
            }
            if ($valor3 > $valor2 && $valor3 > $valor1) {
                echo "El valor 3 = $valor3 es el mayor";
            }
        }
    }
    ?>
</body>

</html>