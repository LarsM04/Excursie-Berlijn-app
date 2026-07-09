<?php
$base = '';
$pageTitle = 'Berlin Trip';
$activeNav = 'home';
include 'includes/header.php';

$featuredSpots = app_fetch_all('SELECT * FROM bezienswaardigheden WHERE is_featured = 1 ORDER BY id ASC LIMIT 2');
$featuredActivities = app_fetch_all('SELECT * FROM activiteiten ORDER BY id ASC LIMIT 2');
$spotTotalRow = app_fetch_one('SELECT COUNT(*) AS total FROM bezienswaardigheden');
$activityTotalRow = app_fetch_one('SELECT COUNT(*) AS total FROM activiteiten');

if ($featuredSpots === []) {
    $featuredSpots = [
        ['titel' => 'Brandenburger Tor', 'categorie' => 'historisch', 'beschrijving' => 'Het meest herkenbare symbool van Berlijn en een perfecte startplek voor foto\'s en een korte uitleg over de stad.', 'afbeelding' => 'assets/images/Brandenburg.jpg', 'reistijd' => '15 min', 'prijs' => 'Gratis'],
        ['titel' => 'Reichstag', 'categorie' => 'politiek', 'beschrijving' => 'Een indrukwekkend parlementsgebouw met glazen koepel en een mooi uitzicht over het centrum.', 'afbeelding' => 'assets/images/reichstach.jpg', 'reistijd' => '30 min', 'prijs' => 'Gratis'],
    ];
}

if ($featuredActivities === []) {
    $featuredActivities = [
        ['titel' => 'Fietstour langs highlights', 'categorie' => 'route', 'beschrijving' => 'Een actieve start waarmee je in korte tijd veel van de stad ziet.', 'afbeelding' => 'assets/images/Brandenburg.jpg', 'duur' => '2 uur', 'label' => 'Groepsactiviteit'],
        ['titel' => 'Avondwandeling door het centrum', 'categorie' => 'avond', 'beschrijving' => 'Rustig wandelen langs bekende plekken en de stad in de avond ervaren.', 'afbeelding' => 'assets/images/Fernsehturm.jpg', 'duur' => '1,5 uur', 'label' => 'Relaxed tempo'],
    ];
}

$spotTotal = (int) ($spotTotalRow['total'] ?? count($featuredSpots));
$activityTotal = (int) ($activityTotalRow['total'] ?? count($featuredActivities));
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
            <strong><?php echo $spotTotal; ?></strong>
            <span>bezienswaardigheden</span>
        </div>
        <div class="metric">
            <strong><?php echo $activityTotal; ?></strong>
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
            <h2>Uitgelicht uit de database</h2>
            <p>Deze items komen direct uit de excursie-content.</p>
        </div>
        <a href="paginas/bezienswaardigheden.php">Alles bekijken</a>
    </div>

    <div class="card-grid">
        <?php foreach ($featuredSpots as $spot): ?>
            <article class="card">
                <div class="card-media">
                    <img src="<?php echo app_asset($spot['afbeelding'], $base); ?>" alt="<?php echo app_h($spot['titel']); ?>">
                    <span class="card-badge"><i class="fa-solid fa-camera"></i> <?php echo app_h(ucfirst($spot['categorie'])); ?></span>
                </div>
                <div class="card-content">
                    <span class="tag"><?php echo app_h($spot['prijs']); ?></span>
                    <h3><?php echo app_h($spot['titel']); ?></h3>
                    <p><?php echo app_h($spot['beschrijving']); ?></p>
                    <div class="meta-row">
                        <span class="meta-pill"><i class="fa-regular fa-clock"></i> <?php echo app_h($spot['reistijd']); ?></span>
                    </div>
                    <div class="card-actions">
                        <a href="paginas/bezienswaardigheden.php" class="button">Open overzicht</a>
                        <a href="paginas/praktisch.php" class="button-secondary">Praktisch</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Activiteiten om te plannen</h2>
            <p>Handig als docenten willen kiezen uit meerdere opties.</p>
        </div>
        <a href="paginas/activiteit.php">Alle activiteiten</a>
    </div>

    <div class="card-grid">
        <?php foreach ($featuredActivities as $activity): ?>
            <article class="activity-card">
                <div class="activity-icon"><i class="fa-solid fa-compass"></i></div>
                <h3><?php echo app_h($activity['titel']); ?></h3>
                <p><?php echo app_h($activity['beschrijving']); ?></p>
                <div class="activity-meta">
                    <span class="activity-pill"><?php echo app_h($activity['duur']); ?></span>
                    <span class="activity-pill"><?php echo app_h($activity['label']); ?></span>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

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