<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['figura'] = $_POST['figura'];
}
$figura = $_SESSION['figura'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de la figura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h3>Introduce los datos del <?= ucfirst($figura) ?></h3>
        </div>
        <div class="card-body">
            <form action="resultado.php" method="post">
                <?php
                switch ($figura) {
                    case 'triangulo':
                        $lado1 = $_SESSION['lado1'] ?? '';
                        $lado2 = $_SESSION['lado2'] ?? '';
                        echo "<div class='mb-3'>
                                <label class='form-label'>Base:</label>
                                <input type='number' step='0.01' name='lado1' value='$lado1' class='form-control' required>
                              </div>";
                        echo "<div class='mb-3'>
                                <label class='form-label'>Altura:</label>
                                <input type='number' step='0.01' name='lado2' value='$lado2' class='form-control' required>
                              </div>";
                        break;

                    case 'rectangulo':
                        $lado1 = $_SESSION['lado1'] ?? '';
                        $lado2 = $_SESSION['lado2'] ?? '';
                        echo "<div class='mb-3'>
                                <label class='form-label'>Base:</label>
                                <input type='number' step='0.01' name='lado1' value='$lado1' class='form-control' required>
                              </div>";
                        echo "<div class='mb-3'>
                                <label class='form-label'>Altura:</label>
                                <input type='number' step='0.01' name='lado2' value='$lado2' class='form-control' required>
                              </div>";
                        break;

                    case 'cuadrado':
                        $lado1 = $_SESSION['lado1'] ?? '';
                        echo "<div class='mb-3'>
                                <label class='form-label'>Lado:</label>
                                <input type='number' step='0.01' name='lado1' value='$lado1' class='form-control' required>
                              </div>";
                        break;

                    case 'circulo':
                        $lado1 = $_SESSION['lado1'] ?? '';
                        echo "<div class='mb-3'>
                                <label class='form-label'>Radio:</label>
                                <input type='number' step='0.01' name='lado1' value='$lado1' class='form-control' required>
                              </div>";
                        break;
                }
                ?>
                <div class="text-center">
                    <input type="submit" value="Calcular" class="btn btn-success">
                    <a href="index.php" class="btn btn-secondary">Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
