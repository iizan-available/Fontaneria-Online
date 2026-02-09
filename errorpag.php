<?php
session_start();

if (!isset($_SESSION['datos.php'])) {
    header("Location: datos.php");
    exit();
}

echo "Bienvenido " . $_SESSION['usuario'];
?>
<?php include 'cabecera.php'; 
    $pass = $_REQUEST["pass"];
    $user = $_REQUEST["user"];

    print($pass);
    print($user);
?>

<h1>ERROR 404</h1>

