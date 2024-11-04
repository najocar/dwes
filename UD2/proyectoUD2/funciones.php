<?php
function precio_iva($precio_arg)
{
    return $precio_arg * 1.21;
}

function date_semana_proxima()
{
    $randomDay = get_random_integer(5, 15);
    return date("Y-m-d", strtotime("+$randomDay days"));
}

function get_random_integer($min, $max)
{
    return rand($min, $max);
}

$viajes = [
    [
        "lugar" => "Granada",
        "precio" => 100,
        "img" => "https://www.barcelo.com/guia-turismo/wp-content/uploads/que-visitar-en-granada-1.jpg",
        "descripcion" => "Descubre Granada, donde la historia y la belleza natural se entrelazan. Admira la majestuosa Alhambra, pasea por las calles empedradas del Albaicín, y disfruta de la rica gastronomía y el ambiente acogedor que hacen de esta ciudad andaluza un destino inolvidable."
    ],
    [
        "lugar" => "Barcelona",
        "precio" => 200,
        "img" => "https://www.barcelo.com/guia-turismo/wp-content/uploads/que-visitar-en-barcelona-1.jpg",
        "descripcion" => "Barcelona, la joya del Mediterráneo, combina arquitectura única, playas doradas y una energía creativa incomparable. Admira las obras de Gaudí, pasea por Las Ramblas, y disfruta de la deliciosa cocina catalana mientras te sumerges en el estilo de vida relajado de esta vibrante ciudad."
    ],
    [
        "lugar" => "Madrid",
        "precio" => 300,
        "img" => "https://www.spain.info/.content/imagenes/cabeceras-grandes/madrid/calle-gran-via-madrid-s333961043.jpg",
        "descripcion" => "Madrid, la vibrante capital de España, te espera con su mezcla de historia, arte y vida nocturna. Recorre el icónico Paseo del Prado, explora el encanto de sus barrios como Malasaña y La Latina, y disfruta de su gastronomía en tabernas tradicionales o en modernos restaurantes gourmet."
    ]
];

function get_destino_data ($destino)
{
    global $viajes;
    foreach ($viajes as $viaje) {
        if (strtolower($viaje["lugar"]) === strtolower($destino)) {
            return $destinoData = $viaje;
            break;
        }
    }
}
