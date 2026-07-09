<?php
$base = '';
$pageTitle = 'Berlin Trip';
$activeNav = 'home';
include 'includes/header.php';
?>

<section class="hero">

    <span class="eyebrow">Excursie 2026 · Berlijn</span>

    <h2>Berlijn in je broekzak</h2>

    <p class="hero-intro">
        Alles wat je nodig hebt voor de excursie op één plek: topbezienswaardigheden,
        slimme activiteiten en praktische info die werkt op je telefoon.
    </p>

    <div class="hero-actions">
        <a href="paginas/bezienswaardigheden.php" class="button">
            <i class="fa-solid fa-location-dot"></i>
            Start met ontdekken
        </a>
        <a href="paginas/praktisch.php" class="button-secondary">
            <i class="fa-solid fa-circle-info"></i>
            Praktische info
        </a>
    </div>

    <div class="search-shell">
        <div class="search" aria-label="Zoekfunctie">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Zoek een plek, activiteit of tip">
        </div>
    </div>

    <div class="hero-metrics">
        <div class="metric">
            <strong>5+</strong>
            <span>bezienswaardigheden</span>
        </div>
        <div class="metric">
            <strong>5+</strong>
            <span>activiteiten & tips</span>
        </div>
        <div class="metric">
            <strong>24/7</strong>
            <span>snelle info onderweg</span>
        </div>
    </div>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Snelle start</h2>
            <p>De belangrijkste onderdelen in één overzicht.</p>
        </div>
        <span>Mobiel ontworpen</span>
    </div>

    <div class="split-grid">
        <article class="feature-card">
            <div class="feature-icon"><i class="fa-solid fa-map-location-dot"></i></div>
            <h3>Populaire plekken</h3>
            <p>Een selectie van de bekendste en meest studentvriendelijke plekken in Berlijn.</p>
            <div class="feature-actions">
                <a href="paginas/bezienswaardigheden.php" class="button">Bekijk plekken</a>
            </div>
        </article>

        <article class="feature-card">
            <div class="feature-icon"><i class="fa-solid fa-compass"></i></div>
            <h3>Activiteiten en tips</h3>
            <p>Van avondwandeling tot foodspots en plannen voor een relaxte groepsdag.</p>
            <div class="feature-actions">
                <a href="paginas/activiteit.php" class="button">Bekijk activiteiten</a>
            </div>
        </article>
    </div>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Uitgelicht</h2>
            <p>Een sterke eerste indruk voor op de homepage.</p>
        </div>
        <a href="paginas/bezienswaardigheden.php">Alles bekijken</a>
    </div>

    <article class="card">
        <div class="card-media">
            <img src="assets/images/Brandenburg.jpg" alt="Brandenburger Tor">
            <span class="card-badge"><i class="fa-solid fa-camera"></i> Iconisch</span>
        </div>
        <div class="card-content">
            <span class="tag">Historisch</span>
            <h3>Brandenburger Tor</h3>
            <p>Het bekendste symbool van Berlijn en een perfecte startplek voor je excursie.</p>
            <div class="card-actions">
                <a href="paginas/bezienswaardigheden.php" class="button">Open overzicht</a>
                <a href="paginas/praktisch.php" class="button-secondary">Route & vervoer</a>
            </div>
        </div>
    </article>

    <article class="card">
        <div class="card-media">
            <img src="assets/images/reichstach.jpg" alt="Reichstag">
            <span class="card-badge"><i class="fa-solid fa-landmark"></i> Must-see</span>
        </div>
        <div class="card-content">
            <span class="tag">Politiek</span>
            <h3>Reichstag</h3>
            <p>Een indrukwekkend gebouw met glazen koepel en een prachtig uitzicht over de stad.</p>
            <div class="card-actions">
                <a href="paginas/bezienswaardigheden.php" class="button">Meer plekken</a>
                <a href="paginas/favorieten.php" class="button-secondary">Favorieten</a>
            </div>
        </div>
    </article>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Tip voor de klas</h2>
            <p>Maak de excursie overzichtelijk met een simpele dagplanning.</p>
        </div>
    </div>

    <div class="notice">
        <strong>Handig:</strong> gebruik de pagina Praktisch voor noodnummers, vervoer en een korte kaart-check voordat je vertrekt.
    </div>

</section>

<?php include 'includes/footer.php'; ?>