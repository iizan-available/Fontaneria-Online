<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Fontanería Giuseppe</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h2, h3 {
            padding: 10px;
            text-align: justify;
            margin-left: 100px;
            margin-right: 100px;
        }

        .historia {
            padding: 10px;
            text-align: justify;
            margin-left: 100px;
            margin-right: 100px;
            line-height: 1.4;
        }

        .productos {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
        }

        .titulo-superior {
            background-color: #6b2a2b;
            padding: 10px;
            text-align: center;
        }

        .titulo-superior a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php include('cabecera.php'); ?>

<h2>La Historia de mi Fontanería</h2>
<div class="historia">
    <p>
        Me llamo Giuseppe y llevo más de 15 años trabajando como fontanero, pero mi historia comienza mucho antes. Cuando era niño, perdí a mis padres debido a una fuga en una tubería oxidada que nadie se preocupó por revisar. Fue una tragedia que marcó mi vida, y desde entonces, me prometí a mí mismo que nunca más alguien debería pasar por algo así.
    </p>
    <p>
        Hoy, con 40 años, mi misión es ser un justiciero contra el óxido, las fugas y todos esos problemas que pueden pasar desapercibidos hasta que es demasiado tarde. Fontanería Giuseppe nace de ese dolor y de esa promesa: ofrecer un servicio que se preocupe por los detalles, que evite los problemas antes de que surjan.
    </p>
    <p>
        Trabajo solo, lo que me permite estar al tanto de cada detalle, revisar cada rincón, y asegurarme de que lo que hago quede perfecto. No se trata solo de reparaciones, se trata de dar tranquilidad, de proteger lo que más importa.
    </p>
</div>

<h3>Nuestros Productos:</h3>
<div class="productos">
    <?php include('plantillas/paixeta1.php'); ?>
</div>

<?php include('piedepagina.php'); ?>

</body>
</html>
