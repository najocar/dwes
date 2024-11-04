<?php
include "funciones.php";
$destino = $_GET["destino"];
$destinoData = get_destino_data($destino);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes Castro - Destino</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: grid;
            justify-content: center;
        }

        section {
            max-width: 800px;
            display: grid;
        }

        .container {
            
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .destination-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .price {
            font-size: 1.5em;
            color: #27ae60;
            text-align: center;
        }

        .description {
            text-align: justify;
            line-height: 1.6;
            color: #555;
        }

        a {
            padding: 10px 0px;
            text-decoration: none;
            background-color: #ff6384;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            width: 150px;
            justify-self: end;
            text-align: center;
        }

        a:hover {
            background-color: #ff6384;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <h1><?php echo $destinoData["lugar"]; ?></h1>
            <img src="<?php echo $destinoData["img"]; ?>" alt="<?php echo $destinoData["lugar"]; ?>" class="destination-image">
            <p class="price">Precio: €<?php echo precio_iva($destinoData["precio"]); ?></p>
            <p class="description"><?php echo $destinoData["descripcion"]; ?></p>
        </div>
        <a href="./index.php" style="color: white;">Volver</a>
    </section>
</body>

</html>