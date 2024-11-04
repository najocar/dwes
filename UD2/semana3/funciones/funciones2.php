<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    function precio_iva_referencia (&$precio, $iva = 21) {
        return $precio * (1 + $iva / 100);
    }

    $precio = 100;
    echo "el $precio con 21% de IVA es:" . precio_iva_referencia($precio);
    ?>



</body>
</html>