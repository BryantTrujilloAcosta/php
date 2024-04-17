<!DOCTYPE html>
<html>

<head>
    <title>Suma de los primeros N números naturales</title>
</head>

<body>
    <?php
    // Verificar si el formulario ha sido enviado
    if (isset ($_POST['submit'])) {
        // Obtener el valor de N desde el formulario
        $n = $_POST['number'];

        // Verificar si el valor ingresado es un número positivo
        if ($n > 0) {
            // Calcular la suma de los primeros N números naturales
            $suma = ($n * ($n + 1)) / 2;
            echo "<p>La suma de los primeros $n números naturales es: $suma</p>";
        } else {
            echo "<p>Por favor, ingrese un número positivo para N.</p>";
        }
    }
    ?>
</body>

</html>