<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    if (!empty ($nombre)) {
        echo "<h2>Nombre ingresado:</h2>";
        for ($i = 0; $i < 5; $i++) {
            echo "$nombre<br>";
        }
    } else {
        echo "<h2>Por favor, ingrese un nombre válido.</h2>";
    }
}
?>