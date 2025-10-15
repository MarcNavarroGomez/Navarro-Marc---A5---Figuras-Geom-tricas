<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Figuras Geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>Selecciona una figura geométrica</h2>
        </div>
        <div class="card-body text-center">
            <form action="formulario.php" method="post" class="mt-3">
                <div class="mb-3">
                    <select name="figura" class="form-select w-50 mx-auto" required>
                        <option value="">-- Selecciona una figura --</option>
                        <option value="triangulo">Triángulo</option>
                        <option value="rectangulo">Rectángulo</option>
                        <option value="cuadrado">Cuadrado</option>
                        <option value="circulo">Círculo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Continuar</button>
            </form>
        </div>
        <div class="card-footer text-center text-muted">
            Programación Orientada a Objetos - PHP
        </div>
    </div>
</div>

</body>
</html>
