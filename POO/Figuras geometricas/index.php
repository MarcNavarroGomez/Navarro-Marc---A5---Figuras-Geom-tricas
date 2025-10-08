<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Figuras Geométricas</title></head>
<body>
<h2>Selecciona una figura</h2>

<form action="formulario.php" method="post">
    <select name="figura" required>
        <option value="">-- Selecciona --</option>
        <option value="triangulo">Triángulo</option>
        <option value="rectangulo">Rectángulo</option>
        <option value="cuadrado">Cuadrado</option>
        <option value="circulo">Círculo</option>
    </select>
    <br><br>
    <input type="submit" value="Continuar">
</form>
</body>
</html>