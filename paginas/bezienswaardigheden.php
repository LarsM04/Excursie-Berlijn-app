<?php
$base = '../';
$pageTitle = 'Bezienswaardigheden';
$activeNav = 'spots';
include '../includes/header.php';

$spots = app_fetch_all('SELECT * FROM bezienswaardigheden ORDER BY id ASC');

if ($spots === []) {
    $spots = [
        ['titel' => 'Brandenburger Tor', 'categorie' => 'historisch', 'beschrijving' => 'Het meest herkenbare monument van Berlijn en een fijne startplek voor foto\'s.', 'afbeelding' => 'assets/images/Brandenburg.jpg', 'reistijd' => '15 min', 'prijs' => 'Gratis'],
        ['titel' => 'Reichstag', 'categorie' => 'historisch', 'beschrijving' => 'Een indrukwekkend parlementsgebouw met een bekende koepel en uitzicht over de stad.', 'afbeelding' => 'assets/images/reichstach.jpg', 'reistijd' => '30 min', 'prijs' => 'Gratis'],
        ['titel' => 'Museuminsel', 'categorie' => 'kunst', 'beschrijving' => 'Een sterk cultuurcluster met verschillende musea op loopafstand van elkaar.', 'afbeelding' => 'assets/images/Museuminsel.jpg', 'reistijd' => '45 min', 'prijs' => 'Ticket'],
        ['titel' => 'Fernsehturm', 'categorie' => 'uitzicht', 'beschrijving' => 'De televisietoren geeft je een sterk uitzicht over de stad en is herkenbaar vanaf veel plekken.', 'afbeelding' => 'assets/images/Fernsehturm.jpg', 'reistijd' => '40 min', 'prijs' => 'Betaald'],
        ['titel' => 'East Side Gallery', 'categorie' => 'kunst', 'beschrijving' => 'De langste openluchtgalerie van de stad, perfect voor studenten die van street art houden.', 'afbeelding' => 'assets/images/eastside.jpg', 'reistijd' => '25 min', 'prijs' => 'Gratis'],
    ];
}
?>

<section class="page-hero" data-filter-scope>

    <span class="eyebrow">Top 5 plekken</span>

    <h2>Bezienswaardigheden die studenten leuk vinden</h2>

    <p>
        Een compacte lijst met highlights die je excursie direct meer inhoud geeft.
        Gebruik de zoekfunctie en filters om snel te kiezen.
    </p>

    <div class="search-shell">
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Zoek op naam of thema" data-filter-input>
        </div>
    </div>

    <div class="filters">
        <button class="filter-chip is-active" type="button" data-filter-chip data-filter="all">Alles</button>
        <button class="filter-chip" type="button" data-filter-chip data-filter="historisch">Historisch</button>
        <button class="filter-chip" type="button" data-filter-chip data-filter="uitzicht">Uitzicht</button>
        <button class="filter-chip" type="button" data-filter-chip data-filter="kunst">Kunst</button>
    </div>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>De lijst</h2>
            <p>Alle plekken zijn geschikt als vaste of losse stop tijdens de excursie.</p>
        </div>
        <span>5 aanbevelingen</span>
    </div>

    <div class="card-grid">

        <?php foreach ($spots as $spot): ?>
            <article class="card" data-filter-item data-category="<?php echo app_h($spot['categorie']); ?>" data-search-text="<?php echo app_h($spot['titel'] . ' ' . $spot['categorie'] . ' ' . $spot['beschrijving']); ?>">
                <div class="card-media">
                    <img src="<?php echo app_asset($spot['afbeelding'], $base); ?>" alt="<?php echo app_h($spot['titel']); ?>">
                    <span class="card-badge"><i class="fa-solid fa-location-dot"></i> <?php echo app_h(ucfirst($spot['categorie'])); ?></span>
                </div>
                <div class="card-content">
                    <span class="tag"><?php echo app_h($spot['prijs']); ?></span>
                    <h3><?php echo app_h($spot['titel']); ?></h3>
                    <p><?php echo app_h($spot['beschrijving']); ?></p>
                    <div class="meta-row">
                        <span class="meta-pill"><i class="fa-regular fa-clock"></i> <?php echo app_h($spot['reistijd']); ?></span>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>

    </div>

    <div class="empty-state" data-filter-empty hidden>
        <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
        <h3>Geen resultaten gevonden</h3>
        <p>Probeer een andere zoekterm of kies een andere filtercategorie.</p>
    </div>

</section>

<section class="section">

    <div class="notice">
        <strong>Tip:</strong> combineer 2 of 3 plekken in één ochtend en plan daarna een pauze in de buurt van een station.
    </div>

</section>

<?php include '../includes/footer.php'; ?>