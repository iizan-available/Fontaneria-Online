<?php include 'cabecera.php'; ?>

<?php
session_start();

if (isset($_POST['user']) && isset($_POST['pass'])) {

    $usuario = $_POST['user'];
    $password = $_POST['pass'];

    if ($usuario === "admin" && $password === "1234") {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['datos'] = true;

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
print("Sessio iniciada, fes clic aqui per a anar al inici.")
?>

<a href="inicio.php" class= a>
        <button class="button button2">INICIO</button> 
    </a>
<style>
    .a{
        position: relative;
        text-align: center;
        top: 50px;
        left: -300px;
    }
</style>