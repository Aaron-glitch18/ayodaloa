<?php

require_once(__DIR__ . "/connect.php");

/*
|--------------------------------------------------------------------------
| Récupération des activités
|--------------------------------------------------------------------------
*/

$sql = "
    SELECT
        id,
        `date`,
        image,
        titreActu1,
        descripActu,
        secteur,
        localite,
        longitude,
        latitude,
        addresse
    FROM buservicedata
    WHERE latitude IS NOT NULL
      AND longitude IS NOT NULL
      AND latitude <> ''
      AND longitude <> ''
    ORDER BY `date` DESC
";

$req = $pdo->prepare($sql);
$req->execute();

$services = $req->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Services à Daloa — Carte</title>

    <!-- Leaflet CSS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .map-container {
            width: 100%;
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .map-header {
            margin-bottom: 20px;
        }

        .map-header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .map-header p {
            margin: 0;
            color: #666;
        }

        #map {
            width: 100%;
            height: 650px;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.12);
        }

        /*
        --------------------------------------------------
        Popup
        --------------------------------------------------
        */

        .service-popup {
            width: 230px;
        }

        .service-popup img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .service-popup h3 {
            margin: 5px 0;
            font-size: 17px;
        }

        .service-popup .secteur {
            display: inline-block;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 20px;
            background: #eee;
            margin-bottom: 8px;
        }

        .service-popup p {
            margin: 5px 0;
            font-size: 13px;
            line-height: 1.4;
        }

        .service-popup .btn-service {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background: #111;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 13px;
        }

        .service-popup .btn-service:hover {
            opacity: 0.85;
        }

        /*
        --------------------------------------------------
        Mobile
        --------------------------------------------------
        */

        @media (max-width: 768px) {

            .map-container {
                padding: 0 10px;
                margin: 15px auto;
            }

            .map-header h1 {
                font-size: 22px;
            }

            #map {
                height: 550px;
                border-radius: 12px;
            }

        }

    </style>

</head>

<body>

<div class="map-container">

    <div class="map-header">

        <h1>Services et activités à Daloa</h1>

        <p>
            Retrouvez les activités enregistrées sur la carte.
            Cliquez sur un marqueur pour consulter le service.
        </p>

    </div>

    <div id="map"></div>

</div>


<!-- Leaflet JS -->
<script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
</script>


<script>

/*
|--------------------------------------------------------------------------
| Initialisation de la carte
|--------------------------------------------------------------------------
|
| Coordonnées approximatives du centre de Daloa.
|
*/

const map = L.map('map').setView(
    [6.8770, -6.4502],
    13
);


/*
|--------------------------------------------------------------------------
| Fond OpenStreetMap
|--------------------------------------------------------------------------
*/

L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    {
        maxZoom: 19,

        attribution:
            '&copy; OpenStreetMap contributors'
    }
).addTo(map);


/*
|--------------------------------------------------------------------------
| Données PHP → JavaScript
|--------------------------------------------------------------------------
*/

const services = <?= json_encode(
    $services,
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES |
    JSON_HEX_TAG |
    JSON_HEX_AMP |
    JSON_HEX_APOS |
    JSON_HEX_QUOT
) ?>;


/*
|--------------------------------------------------------------------------
| Tableau qui contiendra les coordonnées
|--------------------------------------------------------------------------
*/

const positions = [];


/*
|--------------------------------------------------------------------------
| Création des marqueurs
|--------------------------------------------------------------------------
*/

services.forEach(service => {

    const latitude = parseFloat(service.latitude);
    const longitude = parseFloat(service.longitude);

    /*
    Vérification des coordonnées
    */

    if (
        isNaN(latitude) ||
        isNaN(longitude)
    ) {
        return;
    }


    positions.push([
        latitude,
        longitude
    ]);


    /*
    --------------------------------------------------
    Image
    --------------------------------------------------
    */

    let imageHTML = '';

    if (service.image && service.image.trim() !== '') {

        imageHTML = `
            <img
                src="${service.image}"
                alt="${service.titreActu1}"
            >
        `;

    }


    /*
    --------------------------------------------------
    Popup
    --------------------------------------------------
    */

    const popup = `

        <div class="service-popup">

            ${imageHTML}

            <span class="secteur">
                ${service.secteur ?? 'Service'}
            </span>

            <h3>
                ${service.titreActu1}
            </h3>

            <p>
                📍 ${service.adresse ?? service.localite ?? 'Daloa'}
            </p>

            <a
                class="btn-service"
                href="publication.php?id=${service.id}&type=business"
            >
                Voir l'activité
            </a>

        </div>

    `;


    /*
    --------------------------------------------------
    | Création du marqueur
    --------------------------------------------------
    */

    const marker = L.marker([
        latitude,
        longitude
    ]).addTo(map);


    /*
    --------------------------------------------------
    | Popup au clic
    --------------------------------------------------
    */

    marker.bindPopup(popup);

});


/*
|--------------------------------------------------------------------------
| Adapter automatiquement la carte aux marqueurs
|--------------------------------------------------------------------------
*/

if (positions.length > 0) {

    const bounds = L.latLngBounds(positions);

    map.fitBounds(bounds, {
        padding: [50, 50]
    });

}

</script>

</body>
</html>