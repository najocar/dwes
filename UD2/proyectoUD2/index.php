<?php

?>

<?php
include "funciones.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes Castro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="./formulario.html">Contacto</a></li>
        </ul>
    </nav>
    <div style="height: 300px; display: grid; align-content: center; position: relative; overflow: hidden;">
        <div style="
        background-image: url('https://www.navarsol.com/assets/images/maletas%20viaje.jpg');
        filter: blur(10px);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: cover;
        background-position: center;
        z-index: 1;">
        </div>
        <h1 style="margin-top: 0; position: relative; z-index: 2; color: white; text-align: center; font-size: 50px;">Viajes Castro</h1>
    </div>
    <section class="viajes" style="margin-bottom: 50px;">
        <div>
            <h2>Conoce nuestros viajes:</h2>
            <ul>
                <?php foreach ($viajes as $viaje) { ?>
                    <li>
                        <h3><?php echo $viaje["lugar"]; ?></h3>
                        <p>Precio: <?php echo precio_iva($viaje["precio"]) ?>€</p>
                        <img src="<?php echo $viaje["img"]; ?>">
                        <p>Fecha: <?php echo date_semana_proxima() ?></p>
                        <a href="./destino.php?destino=<?php echo $viaje["lugar"]; ?>">Ir a <?php echo $viaje["lugar"]; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</body>

</html>