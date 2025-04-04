<?php
require_once 'config.php'; // Importa la clave API de Meteoblue

// Base de datos manual con coordenadas de todas las provincias argentinas
$provincia_coordenadas = [
    "Buenos Aires" => ["lat" => -34.6037, "lon" => -58.3816],
    "Catamarca" => ["lat" => -28.4696, "lon" => -65.7852],
    "Chaco" => ["lat" => -27.4517, "lon" => -58.9868],
    "Chubut" => ["lat" => -43.299, "lon" => -65.1024],
    "Córdoba" => ["lat" => -31.4201, "lon" => -64.1888],
    "Corrientes" => ["lat" => -27.4692, "lon" => -58.8306],
    "Entre Ríos" => ["lat" => -31.7663, "lon" => -60.519],
    "Formosa" => ["lat" => -26.1849, "lon" => -58.1731],
    "Jujuy" => ["lat" => -24.1858, "lon" => -65.2995],
    "La Pampa" => ["lat" => -36.6167, "lon" => -64.2833],
    "La Rioja" => ["lat" => -29.413, "lon" => -66.8552],
    "Mendoza" => ["lat" => -32.8833, "lon" => -68.8333],
    "Misiones" => ["lat" => -27.3671, "lon" => -55.896],
    "Neuquén" => ["lat" => -38.9516, "lon" => -68.0591],
    "Río Negro" => ["lat" => -40.8135, "lon" => -63.0261],
    "Salta" => ["lat" => -24.7821, "lon" => -65.4232],
    "San Juan" => ["lat" => -31.5375, "lon" => -68.5364],
    "San Luis" => ["lat" => -33.295, "lon" => -66.3356],
    "Santa Cruz" => ["lat" => -51.6226, "lon" => -69.2181],
    "Santa Fe" => ["lat" => -31.6333, "lon" => -60.7003],
    "Santiago del Estero" => ["lat" => -27.7834, "lon" => -64.2642],
    "Tierra del Fuego" => ["lat" => -54.8019, "lon" => -68.302],
    "Tucumán" => ["lat" => -26.8083, "lon" => -65.2176]
];

if (isset($_GET['provincia'])) {
    $provincia = $_GET['provincia'];

    if (isset($provincia_coordenadas[$provincia])) {
        $lat = $provincia_coordenadas[$provincia]['lat'];
        $lon = $provincia_coordenadas[$provincia]['lon'];

        // Consulta Meteoblue
        $apiKey = METEOBLUE_API_KEY;
        $climaUrl = "https://my.meteoblue.com/packages/basic-1h_basic-day?lat=$lat&lon=$lon&apikey=$apiKey";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $climaUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $clima_respuesta = curl_exec($ch);

        // Verifica errores en la consulta cURL
        if ($clima_respuesta === false) {
            echo json_encode(["error" => "Error al conectarse a la API de Meteoblue"]);
            curl_close($ch);
            exit;
        }

        curl_close($ch);

        $clima_datos = json_decode($clima_respuesta, true);

        // Verifica si los datos son válidos
        if (!empty($clima_datos)) {
            echo json_encode($clima_datos); // Enviar datos en JSON para usar en el frontend
        } else {
            echo json_encode(["error" => "No se encontraron datos para la provincia seleccionada"]);
        }
    } else {
        echo json_encode(["error" => "Provincia no encontrada en la base de datos"]);
    }
}
?>