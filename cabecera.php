<!DOCTYPE html>
<html>
    <head>
        <title>Fontaneria Giuseppe</title>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titpag; ?></title>
    <style>

        header {
            display: grid;
            background-color:#6b2a2b; 
            padding: 10px; 
            text-align: left;
        }

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

        .button-cesta {
                background-color: white;
                color: black;
                border: 2px solid black;
                margin-left: auto;
        }

        .button-cesta:hover {
            background-color: #6b2a2b;
            color: white;
        }

    </style>

    </head>
    <header>
        <div style="background-color:#6b2a2b; padding: 10px; text-align: left;">
            <a href="mailto:fontguiseppe@gmail.com" style="color: white; text-decoration: none; margin-left: 100px;">
            <img src='img/envelope.png' alt="No s'ha pogut carregar l'imatge" width=30>
                fontguiseppe@gmail.com
            </a>
            <a href="tel:+641796428" style="color: white; text-decoration: none;" class="telefono">
            <img src='img/telephone.png' alt="No s'ha pogut carregar l'imatge" width=30>
                641 79 64 28
            </a>
        <h1>Bienvenidos a la Fontaneria de Giuseppe<h1>
        <a href="inicio.php">
            <button type="button" class="button button1">Inicio</button> 
        </a>
        <a href="nosotros.php">
        <button class="button button2">Nosotros</button> 
        </a>
        <a href="contacto.php">
        <button class="button button3">Contacto</button> 
        </a>
        <a href="cesta.php"> 
        <button class="button button-cesta">Cesta</button>
        </a>
    </header>
    <body>
    </body>
</html>
