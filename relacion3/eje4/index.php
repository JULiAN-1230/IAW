<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Introduce dos numeros</h2>
    <form action="operaciones.php" method="get">
        Numero uno:
        <input type="number" name="numero1" require></br>
        Numero dos:
        <input type="number" name="numero2" require></br>
        Operador:
        <select name="operador" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>