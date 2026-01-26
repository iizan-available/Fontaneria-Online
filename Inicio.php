<?php

$titpag = "Servicios Fontaneria de Giuseppe";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fontaneria Giuseppe</title>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titpag; ?></title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #8B0000; /* Rojo oscuro */
            padding: 20px;
            text-align: center;
        }
        
        header h1 {
            color: white;
        }
        
        nav {
            margin-top: 20px;
        }
        
        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 18px;
        }

        /* Estilo para el fondo de la imagen y el título */
        .hero {
            background-image: url('path-to-your-image.jpg'); /* Pon aquí la ruta a tu imagen */
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
        }
    </style>

    </head>
    <body>
    <header>
        <h1>Bienvenidos a la Fontaneria de Giuseppe<h1>
    </header>
    </body>
</html>
