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

    $producto = $_POST['producto']; // "paixeta1"

    $_SESSION['cesta'][] = $producto;

    // Redirigir para evitar duplicados al recargar
    header("Location: aixeta1.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<?php include 'cabecera.php'; ?>

<head>
    <meta charset="UTF-8">
    <title>Aixeta 1</title>
</head>

<body>

    <h1 class="h1">
        <b>Fregadero bajo encimera Leda Syan</b>
    </h1>

    <h4 class="txt">
        El fregadero Leda de Syan es un fregadero de cocina de montaje bajo encimera (undermount),
        diseñado para integrarse de forma<br> discreta y elegante bajo la superficie de tu encimera.
    </h4>

    <h4 class="price">
        267€
    </h4>
    <h4 class="desc">
        📐 Dimensiones y compatibilidad<p>

        Medidas aproximadas: 55,5 cm de ancho x 51,5 cm de fondo.<p>

        Profundidad útil alrededor de 22,5 cm, proporcionando un buen espacio para lavar utensilios y alimentos.<p>

        Recomendado para muebles a partir de 60 cm de ancho.<p>

    </h4>

    <img src="img/leda.png" alt="Imagen producto" class="btn" width="450">

    <!-- BOTÓN AGREGAR A LA CESTA -->
    <form method="POST" class="agregar-form">
        <input type="hidden" name="producto" value="paixeta1">
        <button type="submit" class="button button2">AGREGAR A LA CESTA</button>
    </form>

    <!-- BOTÓN IR A LA CESTA -->
    <a href="cesta.php" class="ir-cesta">
        <button class="button button2">IR A LA CESTA</button>
    </a>

</body>

<style>
.price{
    position: relative;
    left: 560px;
    font-size: 30px;
    top: 50px;
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
    top: -350px;
    left: 100px;
}
.desc{
        text-align: left;
        position: relative;
        top: 250px;
        left: 100px;
}
.agregar-form{
    position: relative;
    top: -170px;
    left: 100px;
}
.ir-cesta{
    position: relative;
    top: -150px;
    left: 100px;
}
</style>

</html>
    <?php include 'piedepagina.php'; ?>