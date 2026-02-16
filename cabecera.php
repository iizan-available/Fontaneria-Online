<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
/* --- Cabecera y barra superior --- */
header {
    background-color: #6b2a2b;
    padding: 15px 40px;
    color: white;
}

.top-bar {
    display: flex;
    align-items: center;
    gap: 40px;
    font-size: 14px;
}

.top-bar a {
    color: white;
    text-decoration: none;
}

.telefono {
    margin-left: 20px;
}

.nav-bar {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
}

.nav-bar a {
    text-decoration: none;
}

/* --- Botones de navegación --- */
.button {
    background-color: white;
    color: black;
    border: 2px solid black;
    padding: 10px 22px;
    cursor: pointer;
    transition: 0.3s;
    display: inline-block;
}

.button:hover {
    background-color: #6b2a2b;
    color: white;
}

/* Botón Cesta a la derecha */
.button-cesta {
    margin-left: auto;
}

/* Botón login/logout */
.inicio-sesion {
    border: 2px solid black;
    background-color: black;
    color: black;
    padding: 8px 18px;
    text-decoration: none;
    transition: 0.3s;
}

.inicio-sesion:hover {
    background-color: #6b2a2b;
    color: white;
}

/* Título */
h1 {
    margin-top: 20px;
}
</style>

<header>

    <!-- Barra superior -->
    <div class="top-bar">
        <a href="mailto:fontguiseppe@gmail.com">
            <img src="img/envelope.png" width="20">
            fontguiseppe@gmail.com
        </a>

        <a href="tel:+34641796428" class="telefono">
            <img src="img/telephone.png" width="20">
            641 79 64 28
        </a>

        <?php if (isset($_SESSION["usuario"])): ?>
            <a href="logout.php" class="inicio-sesion">Cerrar Sesión</a>
        <?php else: ?>
            <a href="login.php" class="inicio-sesion">Iniciar Sesión</a>
        <?php endif; ?>
    </div>

    <h1>Bienvenidos a la Fontanería de Giuseppe</h1>

    <!-- Navegación -->
    <div class="nav-bar">
        <a href="inicio.php" class="button">Inicio</a>
        <a href="nosotros.php" class="button">Nosotros</a>
        <a href="contacto.php" class="button">Contacto</a>
        <a href="cesta.php" class="button button-cesta">Cesta</a>
    </div>

</header>


