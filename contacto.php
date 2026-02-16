<!DOCTYPE html>
<?php include('cabecera.php')?>
<head>
    <title>Contacto | Fontanería Giuseppe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #6b2a2b;
            padding: 20px;
            text-align: center;
            color: white;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        .content {
            padding: 20px;
            max-width: 900px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .content h2 {
            font-size: 30px;
            color: #6b2a2b;
        }

        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .contact-info {
            margin: 20px 0;
        }

        .contact-info p {
            font-size: 18px;
            color: #6b2a2b;
        }

        .contact-info a {
            color: #6b2a2b;
            text-decoration: none;
            font-weight: bold;
        }

        .cta-button {
            display: inline-block;
            background-color: #6b2a2b;
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #9f4d4d;
        }

        footer {
            background-color: #6b2a2b;
            color: white;
            text-align: center;
            padding: 0px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>

    <header>
        <h1>Contacto - Fontanería Giuseppe</h1>
    </header>

    <div class="content">
        <h2>¡Contáctame!</h2>
        <p>Si necesitas ayuda con cualquier problema de fontanería o si tienes alguna consulta, no dudes en ponerte en contacto conmigo. Aquí tienes todos mis datos:</p>

        <div class="contact-info">
            <p><strong>Email:</strong> <a href="mailto:fontguiseppe@gmail.com">fontguiseppe@gmail.com</a></p>
            <p><strong>Teléfono:</strong> <a href="tel:+641796428">641 79 64 28</a></p>
            <p><strong>Dirección:</strong> C/PizzaPie de la Santa, 42350</p>
        </div>

        <a href="inicio.php" class="cta-button">Volver al Inicio</a>
    </div>

    <footer>
        <p>&copy; 2026 Fontanería Giuseppe. Todos los derechos reservados.</p>
    </footer>

</body>
<?php include('piedepagina.php')?>
</html>
