<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['figura'] = $_POST['figura'];
}
$figura = $_SESSION['figura'];
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Datos de la figura</title></head>
<body>

<h3>Introduce los datos del <?= ucfirst($figura) ?></h3>
<form action="resultado.php" method="post">
<?php
switch ($figura) {
    case 'triangulo':
        $lado1 = $_SESSION['lado1'] ?? '';
        $lado2 = $_SESSION['lado2'] ?? '';
        // $lado3 = $_SESSION['lado3'] ?? '';
        echo "Base: <input type='number' step='0.01' name='lado1' value='$lado1' required><br>";
        echo "Altura: <input type='number' step='0.01' name='lado2' value='$lado2' required><br>";
        // echo "Lado 3: <input type='number' step='0.01' name='lado3' value='$lado3' required><br>";
        break;
    case 'rectangulo':
        $lado1 = $_SESSION['lado1'] ?? '';
        $lado2 = $_SESSION['lado2'] ?? '';
        echo "Base: <input type='number' step='0.01' name='lado1' value='$lado1' required><br>";
        echo "Altura: <input type='number' step='0.01' name='lado2' value='$lado2' required><br>";
        break;
    case 'cuadrado':
        $lado1 = $_SESSION['lado1'] ?? '';
        echo "Lado: <input type='number' step='0.01' name='lado1' value='$lado1' required><br>";
        break;
    case 'circulo':
        $lado1 = $_SESSION['lado1'] ?? '';
        echo "Radio: <input type='number' step='0.01' name='lado1' value='$lado1' required><br>";
        break;
}
?>
<br><input type="submit" value="Calcular">
</form>
</body>
</html>
