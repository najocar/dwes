<?php
// Recogemos los nombres de las variables
$nombre = $_POST["nombre"];
$modulos = $_POST["modulos"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Procesa 1</h1>
    <p>El nombre que ha rellenado es <?php echo $nombre; ?></p>
</body>

</html>

<?php
print "Nombre: " . $nombre . "<br>";

foreach ($modulos as $clave => $modulo) {
    print "Clave: " . $clave . " Modulo: " . $modulo . "<br>";
}
?>