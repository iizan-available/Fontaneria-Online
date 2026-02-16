<?php
require_once "auth.php"; // protege página
require_once "cabecera.php"; // header dinámico

// Inicializar la cesta si no existe
if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu Cesta</title>
    <style>
        .producto {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h2>Tu Cesta</h2>

<?php if (empty($_SESSION['cesta'])): ?>
    <p>No hay productos en tu cesta.</p>
<?php else: ?>
    <?php foreach ($_SESSION['cesta'] as $prod): ?>
        <div class="producto">
            <?php
            // Cargar la plantilla correspondiente
            // $prod es "paixeta1", "paixeta2" o "paixeta3"
            $file = "plantillas/" . $prod . ".php";
            if (file_exists($file)) {
                include($file);
            } else {
                echo "<p>Producto no encontrado</p>";
            }
            ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<form method="POST">
    <button type="submit" name="vaciar">Vaciar Cesta</button>
</form>

<?php
if (isset($_POST['vaciar'])) {
    $_SESSION['cesta'] = [];
    header("Location: cesta.php");
    exit();
}
?>

</body>
</html>
