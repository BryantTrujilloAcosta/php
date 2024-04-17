<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="Nombre.php" method="post">
        <label for="nombre ">Ingrese su nombre</label>
        <input type="text" name="nombre"><br>
        <input type="submit" value="enviar"><br>
    </form>
    <form action="naturales.php" method="post">
        <label for="number">Ingrese el valor de N:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Calcular suma</button>
    </form>
    <form action="par.php" method="post">
        <label for="numero">Ingresa un número: </label>
        <input type="text" name="numero">
        <input type="submit" value="Comprobar">
    </form>
    <form action="mayor.php" method="post">
        <label for="valor1"> Ingresa el valor 1</label>
        <input type="text" name="valor1"><br>
        <label for="valor2"> Ingresa el valor 2</label>
        <input type="text" name="valor2"><br>
        <label for="valor3"> Ingresa el valor 3</label>
        <input type="text" name="valor3"><br>
        <input type="submit" value="comprobar">
    </form>
    <form action="impuesto.php" method="post">
        <label for="nombre"> Ingresa el nombre del vendedor</label>
        <input type="text" name="nombre"><br>
        <label for="autos"> Numero de autos vendidos</label>
        <input type="text" name="autos"><br>
        <input type="submit" value="Calcular el pago">
    </form>
</body>

</html>