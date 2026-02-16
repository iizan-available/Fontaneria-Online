<?php
// Inicia sesión solo si no hay activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Manejo del logout desde este mismo archivo
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php"); // recarga la página después de cerrar sesión
    exit();
}

// Manejo del login
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user']) && isset($_POST['pass'])) {
    $usuario = $_POST['user'];
    $password = $_POST['pass'];

    if ($usuario === "admin" && $password === "1234") {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['login'] = true;

        header("Location: inicio.php"); // Redirige al inicio después de login
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Fontanería Giuseppe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 80px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background-color: #f2f2f2;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        button {
            background-color: #6b2a2b;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: black;
        }

        .error {
            color: red;
            font-weight: bold;
            text-align: center;
        }

        .volver {
            margin-top: 20px;
            text-align: center;
        }

        .volver button {
            border: 2px solid black;
            background-color: white;
            color: black;
            padding: 8px 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .volver button:hover {
            background-color: #6b2a2b;
            color: white;
        }

        .logout-form {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<h2>Iniciar Sesión</h2>

<?php if ($error): ?>
    <div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<?php if (isset($_SESSION['usuario'])): ?>
    <p>Has iniciado sesión como: <strong><?php echo $_SESSION['usuario']; ?></strong></p>

    <!-- Botón de logout -->
    <form method="POST" class="logout-form">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>

    <div class="volver">
        <a href="inicio.php"><button>Ir al Inicio</button></a>
    </div>

<?php else: ?>
    <!-- Formulario de login -->
    <form method="POST" action="">
        <input type="text" name="user" placeholder="Usuario" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <button type="submit">Iniciar Sesión</button>
    </form>

    <div class="volver">
        <a href="inicio.php"><button>Volver al Inicio</button></a>
    </div>
<?php endif; ?>

</body>
</html>
