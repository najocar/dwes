# Aprendiendo PHP

## Introducción
PHP es un lenguaje de programación de uso común especialmente adecuado para el desarrollo web. Con PHP, podemos generar contenido dinámico en las páginas web, gestionar formularios, interactuar con bases de datos y realizar muchas otras tareas esenciales para el desarrollo de aplicaciones web.

Hasta ahora, hemos aprendido los conceptos fundamentales de PHP, incluyendo los **tipos de datos básicos** y su tratamiento, la **creación de funciones** y cómo utilizar otros archivos de código dentro de nuestros proyectos mediante `require` e `include`.

---

## Tipos de Datos Básicos en PHP

PHP maneja varios tipos de datos básicos que son esenciales para desarrollar aplicaciones web. Entre los tipos más comunes, encontramos:

- **Enteros (`int`)**: Números enteros, positivos o negativos, sin decimales. Ejemplo: `5`, `-42`.
- **Flotantes (`float`)**: Números con decimales. Ejemplo: `3.14`, `-0.99`.
- **Cadenas (`string`)**: Texto. Ejemplo: `"Hola, PHP!"`.
- **Booleanos (`bool`)**: Valores lógicos `true` o `false`, muy utilizados en operaciones de control de flujo.
- **Arreglos (`array`)**: Estructuras que permiten almacenar múltiples valores en una sola variable. Pueden ser indexados o asociativos.
- **Nulos (`null`)**: Representa una variable sin valor o una variable que ha sido eliminada.

Ejemplo de declaración y uso de estos tipos de datos:

```php
<?php
$entero = 10;
$flotante = 10.5;
$cadena = "Hola, PHP!";
$booleano = true;
$arreglo = array("Manzana", "Banana", "Cereza");
$nulo = null;

echo $cadena; // Muestra "Hola, PHP!"
?>
```

## Operaciones con Tipos de Datos

Ejemplos de operaciones en PHP:

- **Operaciones aritméticas**: suma (`+`), resta (`-`), multiplicación (`*`), división (`/`).
- **Concatenación de cadenas**: Para unir cadenas de texto, se usa el operador `.`.

```php
<?php
$nombre = "Ana";
$edad = 25;
echo "Hola, " . $nombre . ". Tienes " . $edad . " años."; // Resultado: Hola, Ana. Tienes 25 años.
?>
```
