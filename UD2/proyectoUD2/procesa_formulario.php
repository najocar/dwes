<?php
$nombre = $_POST["name"];
$email = $_POST["email"];
$comentarios = $_POST["message"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado</title>
    <link rel="stylesheet" href="style.css">
    <style>
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

<body style="height: 100vh; display: grid; justify-content: center; align-content: center; gap: 20px;">
    <h1 style="margin-top: 0;">El mensaje ha sido enviado con exito</h1>
    <section style="display: flex; justify-content: center;">
        <div style="width: 500px; border: 1px solid #ccc; padding: 30px 20px;">
            <h2 style="margin-top: 0;">Revisión del mensaje:</h2>
            <p>Nombre: <?php echo $nombre; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p style="margin-bottom: 0;">Comentarios: <?php echo $comentarios; ?></p>
        </div>
    </section>
    <a href="./index.php" style="color: white;">Volver</a>
</body>

</html>