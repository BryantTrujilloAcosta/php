<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago mensual</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //VARIABLES
        $nombre = $_POST['nombre'];
        $autos = $_POST['autos'];
        $comision = 15 * $autos;
        $sueldo = 350 + $comision;
        if (!is_numeric($autos)) {
            echo "Por favor, ingresa un número válido.";
        } else {
            if ($autos >= 15) {
                $sueldo += 40;
            }
        }
        $impuesto = $sueldo * 0.25;
        $sueldoneto = $sueldo - $impuesto;
        echo "Nombre del vendedor: $nombre";
        echo "<br>";
        echo "Sueldo bruto: $sueldo";
        echo "<br>";
        echo "impuesto: $impuesto";
        echo "<br>";
        echo "Sueldo neto: $sueldoneto";
    }
    ?>
</body>

</html>