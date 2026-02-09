<!DOCTYPE html>
<?php include('cabecera.php')?>
<html>
    <head>
        <style>

            h1 {
                padding: 10px; 
                text-align: justify;
                margin: 1;
                margin-left: 100px;
                margin-right: 100px;
            }

            h2 {
                padding: 10px; 
                text-align: justify;
                margin: 1;
                margin-left: 100px;
                margin-right: 100px;
            }

            .historia {
                padding: 10px; 
                text-align: justify;
                margin: 1;
                margin-left: 100px;
                margin-right: 100px;
            }
        </style>
        <div style="background-color:#6b2a2b; padding: 10px; text-align: center;">
            <a href="Tu Fontaneria de Confianza" style="color: white; text-decoration: none;">
                Tu Fontaneria de Confianza
            </a>
        </div>
    </head>
    <body>

    <h1>la Història de mi Fontaneria<h1>
        <div class="historia">
            <a href="la Història de mi Fontaneria" style="color: black; text-decoration: none; font-size: 25px">
            Me llamo Giuseppe y llevo más de 15 años trabajando como fontanero, pero mi historia comienza mucho antes. Cuando era niño, perdí a mis padres debido a una fuga en una tubería oxidada que nadie se preocupó por revisar. Fue una tragedia que marcó mi vida, y desde entonces, me prometí a mí mismo que nunca más alguien debería pasar por algo así.<br><br>
            Hoy, con 40 años, mi misión es ser un justiciero contra el óxido, las fugas y todos esos problemas que pueden pasar desapercibidos hasta que es demasiado tarde. Fontanería Giuseppe nace de ese dolor y de esa promesa: ofrecer un servicio que se preocupe por los detalles, que evite los problemas antes de que surjan.<br><br>
            Trabajo solo, lo que me permite estar al tanto de cada detalle, revisar cada rincón, y asegurarme de que lo que hago quede perfecto. No se trata solo de reparaciones, se trata de dar tranquilidad, de proteger lo que más importa.<br><br>
            </a>
        </div>

    <h2>Nuestros Productos:<h2>
    <div style="display: flex; justify-content: center; gap: 30px;">
        <?php include('plantillas/paixeta1.php')?> 
        <?php include('plantillas/paixeta1.php')?>
        <?php include('plantillas/paixeta1.php')?>
        <?php include('plantillas/paixeta1.php')?>
        <?php include('plantillas/paixeta1.php')?>
    </div>
    </body>

<?php include('piedepagina.php')?>
</html>