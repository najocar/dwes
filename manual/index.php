<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: grid;">
    <div style="width: 50%; justify-self: center; display: grid;">
        <h1>Manual PHP</h1>
        <div style="width: 90%; justify-self: center;">
            <h2>1. Introducción</h2>
            <p>Para escribir texto en nuestra página desde PHP, utilizamos <code><span>echo "texto a escribir"</span></code></p>
            <p>Aquí tenemos un ejemplo del resultado:</p>
            <?php
            echo "hola mundo";
            ?>
            <h2>2. Variables</h2>
            <p>Las variables en PHP son contenedores que almacenan valores temporales que pueden ser modificados o utilizados en cualquier parte de tu script. Para definir una variable en PHP, se utiliza el signo <code>$</code> seguido del nombre de la variable.</p>
            <p>Ejemplo básico:</p>
            <pre><code>&lt;?php 
$nombre = "Juan";
echo $nombre; 
?&gt;</code></pre>
            <p>En este caso, la variable <code>$nombre</code> almacena el texto "Juan" y luego lo imprime en pantalla usando <code>echo</code>.</p>

            <h3>Tipos de Datos en PHP</h3>
            <p>En PHP, las variables pueden contener diferentes tipos de datos. Es importante entender los principales tipos de datos que puedes almacenar:</p>

            <ul>
                <li><strong>String (Cadena de texto):</strong> Representa una secuencia de caracteres, delimitada por comillas simples (<code>' '</code>) o dobles (<code>" "</code>).</li>
                <pre><code>&lt;?php
$saludo = "Hola Mundo";
echo $saludo; // Salida: Hola Mundo
?&gt;</code></pre>

                <li><strong>Integer (Entero):</strong> Números enteros (sin parte decimal), ya sean positivos o negativos.</li>
                <pre><code>&lt;?php
$edad = 25;
echo $edad; // Salida: 25
?&gt;</code></pre>

                <li><strong>Float (Punto flotante o decimal):</strong> Números con parte decimal.</li>
                <pre><code>&lt;?php
$precio = 19.99;
echo $precio; // Salida: 19.99
?&gt;</code></pre>

                <li><strong>Boolean (Booleano):</strong> Representa un valor verdadero (<code>true</code>) o falso (<code>false</code>).</li>
                <pre><code>&lt;?php
$esVerdadero = true;
$esFalso = false;
echo $esVerdadero; // Salida: 1 (true)
echo $esFalso; // Salida: (nada, porque es false)
?&gt;</code></pre>

                <li><strong>Array:</strong> Una colección de valores agrupados bajo una misma variable. Los arrays pueden ser indexados (con índices numéricos) o asociativos (con claves definidas por el programador).</li>
                <pre><code>&lt;?php
$frutas = array("manzana", "plátano", "fresa");
echo $frutas[1]; // Salida: plátano
?&gt;</code></pre>

                <li><strong>NULL:</strong> Representa una variable sin valor.</li>
                <pre><code>&lt;?php
$vacío = NULL;
echo $vacío; // Salida: (nada, porque es NULL)
?&gt;</code></pre>
            </ul>
            <p>PHP es un lenguaje de tipado débil, lo que significa que no necesitas especificar el tipo de dato al declarar una variable, ya que PHP lo infiere automáticamente.</p>

            <h2>3. Cadenas</h2>
            <p>Para concatenar cadenas, utilizamos el "." tal que así <code><span>$variable = $variable . "texto a concatenar"</span></code></p>
            <p>Aquí tenemos un ejemplo del resultado:</p>
            <?php
            $variable = "hola ";
            $variable .= "mundo";
            echo $variable;
            ?>
            <h2>4. Constantes</h2>
            <p>Para crear constantes, utilizamos <code><span>define("PI", 3.1416)</span></code></p>
            <p>Aquí tenemos un ejemplo del resultado:</p>
            <?php
            define("PI", 3.1416);
            echo PI;
            ?>
            <h2>5. Funciones</h2>
            <p>Para crear funciones, utilizamos <code><span>function nombreFuncion(){}</span></code></p>
            <p>Aquí tenemos un ejemplo del resultado:</p>
            <?php
            function nombreFuncion()
            {
                echo "hola mundo";
            }
            nombreFuncion();
            ?>
            <h2>6. Arrays</h2>
            <p>Para crear arrays, utilizamos <code><span>$array = array("elemento1", "elemento2", "elemento3")</span></code></p>
            <p>Aquí tenemos un ejemplo del resultado:</p>
            <?php
            $array = array("elemento1", "elemento2", "elemento3");
            echo $array[1];
            ?>
        </div>
    </div>

</body>

</html>