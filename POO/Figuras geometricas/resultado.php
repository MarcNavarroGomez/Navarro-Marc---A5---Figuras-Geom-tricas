<?php
session_start();
require_once 'clases/Triangulo.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Cuadrado.php';
require_once 'clases/Circulo.php';


$figura = $_SESSION['figura'];
// echo "$figura<br>";
// Recogemos datos de las sesiones recorriendo el array POST, mas rapido y mas sencillo
foreach ($_POST as $recibido => $transformado) {
    $_SESSION[$recibido] = $transformado;
}

switch ($figura) {
    case 'triangulo':
        $obj = new Triangulo($_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
        break;
    case 'rectangulo':
        $obj = new Rectangulo($_SESSION['lado1'], $_SESSION['lado2']);
        break;
    case 'cuadrado':
        $obj = new Cuadrado($_SESSION['lado1']);
        break;
    case 'circulo':
        $obj = new Circulo($_SESSION['lado1']);
        break;
    default:
        die("Figura no reconocida.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Resultado</title></head>
<body>
<h3>Resultado</h3>
<p><?= $obj ?></p>
<p><b>Área:</b> <?= round($obj->calcularArea(), 2) ?></p>
<p><b>Perímetro:</b> <?= round($obj->calcularPerimetro(), 2) ?></p>

<br>
<a href="formulario.php">Modificar datos</a><br>
<a href="index.php">Volver al inicio</a>
</body>
</html>
