<?php



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fontaneria Giuseppe</title>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titpag; ?></title>
    <style>
       .telefono {
            margin-left: 60px;
       }

       header h1 {
            color: white;
       }

       .button {
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
       }

       
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid black;
        }

        .button1:hover {
            background-color: #6b2a2b;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid black;
        }

        .button2:hover {
            background-color: #6b2a2b;
            color: white;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid black;
        }

        .button3:hover {
            background-color: #6b2a2b;
            color: white;
        }
    </style>

    </head>
    <body>
        <div style="background-color:#6b2a2b; padding: 10px; text-align: left;">
            <a href="mailto:fontguiseppe@gmail.com" style="color: white; text-decoration: none;">
               <img > 
                fontguiseppe@gmail.com
            </a>
            <a href="tel:+34977555555" style="color: white; text-decoration: none;" class="telefono"">
                977 55 55 55
            </a>
    <header>
        <h1>Bienvenidos a la Fontaneria de Giuseppe<h1>
        <a href="Inicio.php">
            <button type="button" class="button button1">Inicio</button> 
        </a>
        <a href="nosotros.php">
        <button class="button button2">Nosotros</button> 
        </a>
        <a href="Contacto.php">
        <button class="button button3">Contacto</button> 
        </a>
    </header>
    </body>
</html>