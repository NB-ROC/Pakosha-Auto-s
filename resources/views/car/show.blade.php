<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Auto Details – Pakosha Autos</title>

    <link rel="stylesheet" href="/car/car.css">
</head>

<body>

<div class="container">

    {{-- TITLE --}}
    <h1 class="car-title">Volkswagen Golf 1.4 TSI Highline</h1>

    <div style="display:flex; gap:30px;">

        {{-- LEFT IMAGES --}}
        <div style="flex:2;">
            <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg"
                 class="main-image">

            <div class="gallery">
                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg">
                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg">
                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg">
                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg">
            </div>
        </div>

        {{-- RIGHT SIDEBAR --}}
        <div class="sidebar" style="flex:1;">
            <div class="price">€18.950</div>

            <div class="car-info">
                2020 • 45.000 km • Benzine • Automaat
            </div>

            <span class="status">Beschikbaar</span>

            <a href="" class="contact-btn">
                Neem contact op
            </a>
        </div>

    </div>

    {{-- SPECIFICATIONS --}}
    <div class="box">
        <div class="box-title">Specificaties</div>

        <div class="spec-grid">
            <p><strong>Bouwjaar:</strong> 2020</p>
            <p><strong>Kilometerstand:</strong> 45.000 km</p>
            <p><strong>Brandstof:</strong> Benzine</p>
            <p><strong>Transmissie:</strong> Automaat</p>
            <p><strong>Vermogen:</strong> 150 pk</p>
            <p><strong>Carrosserie:</strong> Hatchback</p>
            <p><strong>Kleur:</strong> Donkerblauw</p>
            <p><strong>APK tot:</strong> 10/2026</p>
        </div>
    </div>

    {{-- DESCRIPTION --}}
    <div class="box">
        <div class="box-title">Beschrijving</div>

        <p class="description">
            Zeer nette Volkswagen Golf 1.4 TSI Highline met complete onderhoudshistorie.
            Luxe uitvoering met tal van opties zoals navigatie, cruise control, parkeersensoren en meer.
        </p>
    </div>

</div>

<script src="/car/car.js"></script>

</body>
</html>
