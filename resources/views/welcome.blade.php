<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Pakosha Autos</title>

  @vite([
    'resources/css/welcome.css',
    'resources/css/nav.css',
    'resources/js/app.js'
  ])
</head>
<body>
  @include('nav.header')

  <main class="site-main">
    <!-- Introductie Section -->
    <section class="intro-section">
        <div class="container intro-content">
            <div class="intro-text">
                <h1>Welkom bij <span class="text-red">Pakosha</span> Autos</h1>
                <p>Uw betrouwbare autogarage in Arnhem voor APK‑keuringen, reparaties, bandenservice en auto‑onderdelen. Meer dan 20 jaar ervaring in de automotive sector.</p>
                <div class="intro-buttons">
                    <button class="btn btn-primary">Bekijk onze auto's</button>
                    <button class="btn btn-secondary">Afspraak maken</button>
                </div>
                <div class="intro-stats">
                    <div class="stat">
                        <h3>20+</h3>
                        <p>Jaar ervaring</p>
                    </div>
                    <div class="stat">
                        <h3>500+</h3>
                        <p>Auto's verkocht</p>
                    </div>
                    <div class="stat">
                        <h3>1000+</h3>
                        <p>Tevreden klanten</p>
                    </div>
                </div>
            </div>
            <div class="intro-image">
                <!-- Placeholder -->
            </div>
        </div>
    </section>

    <!-- Onze Diensten Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Onze Diensten</h2>
                <p>Pakosha Autos biedt een volledig pakket aan autodiensten. Van APK keuringen tot onderdelen, wij zorgen ervoor dat uw auto in topconditie blijft.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/apk.jpg') }}" alt="APK Keuringen">
                    </div>
                    <div class="service-info">
                        <h3>APK Keuringen</h3>
                        <p>Officiële APK keuringen door erkende experts met snelle afhandeling.</p>
                        <ul class="service-features">
                            <li>✓ Directe toelating mogelijk</li>
                            <li>✓ Gratis diagnose</li>
                            <li>✓ Gratis herkeuring</li>
                        </ul>
                        <button class="btn btn-primary">Afspraak maken</button>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/repairs.jpg') }}" alt="Reparaties">
                    </div>
                    <div class="service-info">
                        <h3>Reparaties</h3>
                        <p>Professionele autoreparaties voor alle merken en types.</p>
                        <ul class="service-features">
                            <li>✓ Alle merken</li>
                            <li>✓ Gratis diagnose</li>
                            <li>✓ Garantie op werk</li>
                        </ul>
                        <button class="btn btn-primary">Afspraak maken</button>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/tires.jpg') }}" alt="Bandenservice">
                    </div>
                    <div class="service-info">
                        <h3>Bandenservice</h3>
                        <p>Balanceren, uitlijnen en vervangen van banden.</p>
                        <ul class="service-features">
                            <li>✓ Alle bandenmaten</li>
                            <li>✓ Opslag moggelik</li>
                            <li>✓ Gratis reparatie</li>
                        </ul>
                        <button class="btn btn-primary">Afspraak maken</button>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/parts.jpg') }}" alt="Auto-onderdelen">
                    </div>
                    <div class="service-info">
                        <h3>Auto-onderdelen</h3>
                        <p>Originele en vervangingsonderdelen voor alle automerken.</p>
                        <ul class="service-features">
                            <li>✓ Originele onderdelen</li>
                            <li>✓ Alternatieve keuze</li>
                            <li>✓ Snelle levering</li>
                        </ul>
                        <button class="btn btn-primary">Afspraak maken</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Auto's te koop Section -->
    <section class="cars-section">
        <div class="container">
            <div class="section-header">
                <h2>Auto's te koop</h2>
                <p>Bekijk ons actuele aanbod van zorgvuldig geselecteerde tweedehands auto's. Alle auto's zijn technisch getest en komen met garantie.</p>
            </div>
            <div class="cars-grid">
                <div class="car-card">
                    <div class="car-image">
                        <span class="car-badge">Aangeboden</span>
                        <img src="{{ asset('images/car-1.jpg') }}" alt="Volkswagen Golf 1.4 TSI">
                    </div>
                    <div class="car-info">
                        <h4>Volkswagen Golf 1.4 TSI</h4>
                        <div class="car-price">€18.950</div>
                        <div class="car-details">
                            <span>📅 2020</span>
                            <span>⛽ Benzine</span>
                            <span>🔧 45.000 km</span>
                        </div>
                        <div class="car-actions">
                            <button class="btn btn-primary">Meer info</button>
                            <button class="btn btn-secondary">Profiel</button>
                        </div>
                    </div>
                </div>

                <div class="car-card">
                    <div class="car-image">
                        <span class="car-badge">Aanbevolen</span>
                        <img src="{{ asset('images/car-2.jpg') }}" alt="Toyota Corolla Hybrid">
                    </div>
                    <div class="car-info">
                        <h4>Toyota Corolla Hybrid</h4>
                        <div class="car-price">€16.750</div>
                        <div class="car-details">
                            <span>📅 2019</span>
                            <span>⚡ Hybride</span>
                            <span>🔧 62.000 km</span>
                        </div>
                        <div class="car-actions">
                            <button class="btn btn-primary">Meer info</button>
                            <button class="btn btn-secondary">Profiel</button>
                        </div>
                    </div>
                </div>

                <div class="car-card">
                    <div class="car-image">
                        <span class="car-badge">Aangeboden</span>
                        <img src="{{ asset('images/car-3.jpg') }}" alt="BMW M440i xDrive">
                    </div>
                    <div class="car-info">
                        <h4>BMW M440i xDrive</h4>
                        <div class="car-price">€32.900</div>
                        <div class="car-details">
                            <span>📅 2021</span>
                            <span>⛽ Diesel</span>
                            <span>🔧 28.000 km</span>
                        </div>
                        <div class="car-actions">
                            <button class="btn btn-primary">Meer info</button>
                            <button class="btn btn-secondary">Profiel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Onderdelen zoeken Section -->
    <section class="parts-section">
        <div class="container">
            <h2>Onderdelen zoeken</h2>
            <p>Voor uw automatische en vind direct de juiste onderdelen voor uw auto. Wij controleren direct beschikbaarheid.</p>
            <div class="parts-search">
                <div class="search-group">
                    <label>Kenteken invoeren</label>
                    <input type="text" placeholder="Kenteken (bijv. 12-ABC-3)">
                </div>
                <div class="search-group">
                    <label>Probleem opgesomd</label>
                    <div class="kenteken-tags">
                        <span>12-ABC-3</span>
                        <span>34-DEF-5</span>
                        <span>56-GHI-7</span>
                    </div>
                </div>
                <button class="btn btn-primary">Zoeken</button>
            </div>
        </div>
    </section>

    <!-- Contact & Locatie Section -->
    <section class="contact-section">
        <div class="container contact-grid">
            <div class="contact-info">
                <h2>Contact & Locatie</h2>
                <p>Heeft u vragen of wilt u graag afspraken maken? Neem contact met ons op of bezoek onze showroom.</p>

                <div class="contact-block">
                    <h4>Bel ons</h4>
                    <p class="contact-phone">026 123 4567</p>
                    <p class="contact-desc">Voor technisch advies en vragen</p>
                </div>

                <div class="contact-block">
                    <h4>Bezoektijden</h4>
                    <p><strong>Pakosha Autos</strong></p>
                    <p>Industrieweg 123<br>6827 BV Arnhem<br>Nederland</p>
                </div>

                <div class="contact-block">
                    <h4>Openingstijden</h4>
                    <p>Maandag - Vrijdag<br>8:00 - 17:30</p>
                    <p>Zaterdag<br>9:00 - 16:00</p>
                    <p>Zondag<br>Gesloten</p>
                </div>

                <p class="contact-note">Let op: Voor APK-keuringen graag vooraf bellen voor afspraak.</p>
            </div>

            <div class="contact-form-block">
                <h3>Onze locatie</h3>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Naam *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mailadres *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefoonnummer</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="message">Bericht</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contact bellen</button>
                </form>
                <div class="map-placeholder">
                    Google Maps wordt hier getoond
                </div>
            </div>
        </div>
    </section>
  </main>

  @include('nav.footer')
</body>
</html>
