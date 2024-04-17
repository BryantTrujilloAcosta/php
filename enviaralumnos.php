<!DOCTYPE html>
<?php
include ('Escuela.php');
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nocontrol = $_POST['numero de control'];
    echo "numero de control: $nocontrol";
    echo "<br>";
    $nombre = $_POST['nombre'];
    echo "nombre del alumno: $nombre";
    echo "<br>";
    $apellidopat = $_POST['apellidoPat'];
    echo "Apellido Paterno $nombre";
    echo "<br>";
    $apellidomat = $_POST['apellidoMat'];
    echo "Apellido Materno: $apellidoMat";
    echo "<br>";
    $sexo = $_POST['sexo'];
    echo "sexo: $sexo";
    echo "<br>";
    $edad = $_POST['edad'];
    echo "edad: $edad";
    echo "<br>";
    $carreraid = $_POST['carrera'];
    echo "carrera: $carreraid";
    echo "<br>";

    $sql = "INSERT INTO estudiante (nocontrol,nombre,apellidopat,apellidomat,sexo,edad,carreraid) values('$nocontrol','$nombre','$apellidopat','$apellidomat','$sexo','$edad','$carreraid')";
    if (mysqli_query($conn, $sql)) {
        echo "Estudiante guardado a la BD";
    } else {
        echo "Error:" . $sql . mysqli_error($conn);
    }
    ?>
</body>

</html>