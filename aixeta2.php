<!DOCTYPE html>
<?php include 'cabecera.php'; ?>
<html>
    <h1 class="h1">
        <b>VEVOR Fregadero de Cocina de Acero Inoxidable</b>
    </h1>
    <h4 class="txt">
        Este fregadero está fabricado en acero inoxidable 304 de alta calidad, un material muy usado en cocina<p>
        por ser resistente, facil de limpiar y su elegancia
    </h4>
    <h4 class="price">
        95€
    </h4>   
    <h4 class="desc">

        🛠 Diseño y funcionalidad<p>

        💧 Amplio espacio de lavado: Las dimensiones internas suelen ser grandes y profundas, permitiendo lavar ollas, sartenes y utensilios voluminosos sin problemas.<p>

        🧽 Drenaje eficiente: El diseño del fondo con patrón en forma de X o caída suave ayuda a que el agua se evacue rápidamente, evitando acumulaciones.<p>

        🔇 Reducción de ruido: Muchos modelos incluyen almohadillas reductoras de sonido y aislamiento para minimizar el ruido al usar el fregadero.<p>

        🧼 Esquinas redondeadas (R10): Facilitan la limpieza y evitan que se acumulen restos de comida en las esquinas.<p>
    </h4>
    <body>
        <img src='img\aixeta2.png' alt="No s'ha pogut carregar l'imatge"
        class="btn" width=450>
    </body>

    <!-- BOTÓN AGREGAR A LA CESTA -->
    <form method="POST" class="agregar-form">
        <input type="hidden" name="producto" value="paixeta1">
        <button type="submit" class="button button2">AGREGAR A LA CESTA</button>
    </form>

    <!-- BOTÓN IR A LA CESTA -->
    <a href="cesta.php" class="ir-cesta">
        <button class="button button2">IR A LA CESTA</button>
    </a>

    
    <style>
    .price{
        margin-top: 1;
        position: relative;
        left: 560px;
        font-size: 30px;
        top: 25px;
    }
    .h1{
        position: relative;
        top: 50px;
        left: 560px;
    }
    .txt{
        position: relative;
        top: 50px;
        left: 560px;
    }
    .btn {
        text-align: center;
        position: relative;
        left: 100px;
        top: -410px;
        margin-bottom: -230px;
    }
    .a{
        text-align: center;
        position: relative;
        top: -190px;
        left: 100px;
    }
    .desc{
        text-align: left;
        position: relative;
        top: 190px;
        left: 100px; 
    }
    .agregar-form{
        position: relative;
        top: -5px;
        left: 100px;
    }
    .ir-cesta{
        position: relative;
        top: 10px;
        left: 100px;
    }

    </style>
</html>
<html>
    <?php include 'piedepagina.php'; ?>
