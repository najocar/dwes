<?php
print "<h2>UD2. ARRAYS</h2>";

print "Un array es un tipo de datos que nos permite almacenar varios valores. 
    Cada miembro del array se almacena en una posición a la que se hace referencia utilizando un valor clave. 
    Las claves pueden ser numéricas o asociativas.";

print "<br> Array asociativo y sus dos formas de crearlo:";

$persona = array('nombre' => 'Juan', 'edad' => 30);

$alumno = [
    'nombre' => 'Algo',
    'edad' => 30
];

print "<br> Array persona:";
print_r($persona);

print "<br> Array alumno:";
print_r($alumno);

print "<h2>Arrays numéricos y sus tres formas de crearlos</h2>";
$colores = array(0 => 'rojo', 1 => 'verde', 2 => 'azul');
$coches = array('renault', 'ford', 'fiat');
$numeros = [1, 2, 3, 4, 5];

print "<br> Array colores:";
print_r($colores);

print "<br> Array coches:";
print_r($coches);

print "<br> Array numeros:";
print_r($numeros);

print "<br>la marca de coches 2 es " . $coches[1];

// Texto como arrays

print "<br> print de la variable TEXTO para ver que las cadenas se pueden tratar como arrays:";
$texto = "hola";
print("<br> ELEMENTO CADENA DE TEXTO hola[3]: " . $texto[3] . "<br>");

// Arrays multidimensionales asociativos

print "<h2>Arrays multidimensionales</h2>";
//bidimensional asociativo

$asignaturas = array(
    "eso1" => array('matemática', 'fisica', 'quimica'),
    "eso2" => array('ingles', 'castellano', 'frances'),
    "eso3" => array('biologia', 'historia', 'geografia')
);
print "<br> Array asignaturas:";
print_r($asignaturas);

print "<br> la asignatura de la asignatura 2 es " . $asignaturas["eso2"][2];


$deportes = [
    "futbol" => ["madrid", "barcelona", "sevilla"],
    "tenis" => ["federer", "nadal", "djokovic"],
    "baloncesto" => ["unicaja", "lakers", "celtics"]
];

$deportes2 = [
    ["madrid", "barcelona", "sevilla"],
    ["federer", "nadal", "djokovic"],
    ["unicaja", "lakers", "celtics"]
];

print "<br> Array deportes:";
print_r($deportes);
print "<br>el jugador de tenis 2 es " . $deportes["tenis"][1];

print "<br> Array deportes2:";
print_r($deportes2);
print "<br>El equipo de futbol 1 es " . $deportes2[0][0];


$coches = array(
    array('renault', 'ford', 'fiat'),
    array('audi', 'bmw', 'mercedes'),
    array('citroen', 'peugeot', 'opel')
);
print "<br> Array multidimensional coches:";
print_r($coches);
print "<br>la marca de coches 2 es " . $coches[1][2];


print "<h2>Arrays sin especificar el tamaño</h2>";
//$cena_navidad= array();
$cena_navidad[] = "Carlos";
$cena_navidad[] = "Pedro";
$cena_navidad[] = "Maria";

print_r($cena_navidad);

print "<h2>Recorrer el Array</h2>";

foreach ($cena_navidad as $key => $value) {
    print "$key - $value <br> ";
}

foreach ($cena_navidad as $invitado) {
    print "$invitado <br>";
}

// ANEXO FOREACH con clave valor <br />";
// print "<h2>FOREACH con clave valor de la variable SERVER </h2>";

// foreach ($_SERVER as $clave => $valor) {
//     print "<br/>";
//     print "<tr/>";
//     print "<td> Clave: " . $clave . "</td> --------- Valor: ";
//     print "<td>" . $valor . "</td>";
//     print "</tr>";
// }

echo "<h2> Recorrer Arrays con Current, Key, Reset y Next</h2>";

$musica = array('rock', 'pop', 'jazz');

print_r($musica);
$key = key($musica);

echo "<br> Recorriendo con while NEXT <br>";

while ($valor = current($musica)) {
    print "<br> el género de música es " . $valor;
    next($musica);
}

echo "<br><br /> <b> Recorrerlo uno a uno </b>";

print "<br/>Reinicio el puntero con reset: " . reset($musica);
print "<br/>La clave de la posición actual del array es: " . key($musica);
print "<br/>El elemento del array musica es " . current($musica);
next($musica);
next($musica);
print "<br/>El elemento del array musica es " . current($musica);
prev($musica);
print "<br/>El elemento del array musica es " . current($musica);
end($musica);
print "<br/>El elemento del array musica es " . current($musica);
reset($musica);
print "<br/>El elemento del array musica es " . current($musica);

//Eliminar elemento del array
print "<br/>Eliminamos un elemento del array musica";
unset($musica[1]);
print_r($musica);
$para_buscar = "Cumbia";
if (in_array($para_buscar, $musica)) {

    print "<br/>Existe el elemento " . $para_buscar;
    print "Su clave es " . array_search($para_buscar, $musica);
} else
    print "NO Existe el elemento " . $para_buscar;


//busqueda con 
$para_buscar = "0";
if (array_key_exists($para_buscar, $musica)) {

    print "<br/>Existe el elemento " . $para_buscar;
    print "El elemento es " . $musica[$para_buscar];
} else
    print "NO Existe el elemento " . $para_buscar;
