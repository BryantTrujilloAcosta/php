<!DOCTYPE html>
<html>

<head>
    <title>Resultado</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número ingresado por el usuario
        $numero = $_POST['numero'];

        // Verificar si el número es válido
        if (!is_numeric($numero)) {
            echo "Por favor, ingrese un número válido.";
        } else {
            // Determinar si el número es par o impar
            if ($numero % 2 == 0) {
                echo "El número $numero es par.";
            } else {
                echo "El número $numero es impar.";
            }
        }
    }
    ?>
</body>

</html>