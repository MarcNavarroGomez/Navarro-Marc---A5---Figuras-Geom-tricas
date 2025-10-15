<?php
session_start();
require_once 'clases/Triangulo.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Cuadrado.php';
require_once 'clases/Circulo.php';

$figura = $_SESSION['figura'];

foreach ($_POST as $recibido => $transformado) {
    $_SESSION[$recibido] = $transformado;
}

switch ($figura) {
    case 'triangulo':
        $obj = new Triangulo($_SESSION['lado1'], $_SESSION['lado2']);
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
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white text-center">
            <h3>Resultado de la figura</h3>
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                <?= $obj ?>
            </div>
            <p><b>Área:</b> <?= round($obj->calcularArea(), 2) ?></p>
            <p><b>Perímetro:</b> <?= round($obj->calcularPerimetro(), 2) ?></p>

            <div class="text-center mt-4">
                <a href="formulario.php" class="btn btn-warning">Modificar datos</a>
                <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
