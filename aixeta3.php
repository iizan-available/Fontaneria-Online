<?php
// Iniciar sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inicializar la cesta si no existe
if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = [];
}

// Si se pulsa "Agregar a la cesta"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto'])) {

    $producto = $_POST['producto']; // "paixeta3"

    $_SESSION['cesta'][] = $producto;

    // Redirigir para evitar duplicados al recargar
    header("Location: aixeta3.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<?php include 'cabecera.php'; ?>

<head>
    <meta charset="UTF-8">
    <title>Aixeta 3</title>
</head>

<body>

<h1 class="h1">
    <b>Fregadero VidaXL Fregadero negro de doble contenedor</b>
</h1>

<h4 class="txt">
    Es un fregadero de cocina moderno con dos cubetas o “senos” separados,<p>
    ideal para lavar platos y preparar alimentos al mismo tiempo.
</h4>

<h4 class="price">
    233€
</h4>

<h4 class="desc">
🛠 Diseño y funcionalidad<br><br>

💧 Amplio espacio de lavado: Permite lavar ollas y utensilios grandes.<br><br>

🧽 Drenaje eficiente: Evita acumulaciones de agua.<br><br>

🔇 Reducción de ruido: Incluye aislamiento acústico.<br><br>

🧼 Esquinas redondeadas: Facilitan la limpieza.
</h4>

<img src="img/aixeta3.png" alt="Imagen producto" class="btn" width="450">

<!-- BOTÓN AGREGAR A LA CESTA -->
<form method="POST" class="agregar-form">
    <input type="hidden" name="producto" value="paixeta3">
    <button type="submit" class="button button2">AGREGAR A LA CESTA</button>
</form>

<!-- BOTÓN IR A LA CESTA -->
<a href="cesta.php" class="ir-cesta">
    <button class="button button2">IR A LA CESTA</button>
</a>

<?php include 'piedepagina.php'; ?>

</body>

<style>
.price{
    position: relative;
    left: 560px;
    font-size: 30px;
    top: 25px;
}
.h1{
    position: relative;
    top: 50px;
    left: 560px;
}
.txt{
    position: relative;
    top: 50px;
    left: 560px;
}
.btn {
    position: relative;
    left: 100px;
    top: -410px;
}
.desc{
    position: relative;
    top: 70px;
    left: 100px;
}
.agregar-form{
    position: relative;
    top: -150px;
    left: 100px;
}
.ir-cesta{
    position: relative;
    top: -130px;
    left: 100px;
}
</style>

</html>

