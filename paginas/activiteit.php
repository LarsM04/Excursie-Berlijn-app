<?php
$base = '../';
$pageTitle = 'Activiteiten en tips';
$activeNav = 'activities';
include '../includes/header.php';

$activities = app_fetch_all('SELECT * FROM activiteiten ORDER BY id ASC');

if ($activities === []) {
    $activities = [
        ['titel' => 'Fietstour langs highlights', 'categorie' => 'route', 'beschrijving' => 'Een actieve start waarmee je in korte tijd veel van de stad ziet.', 'afbeelding' => 'assets/images/Brandenburg.jpg', 'duur' => '2 uur', 'label' => 'Groepsactiviteit'],
        ['titel' => 'Avondwandeling door het centrum', 'categorie' => 'avond', 'beschrijving' => 'Rustig wandelen langs bekende plekken en de stad in de avond ervaren.', 'afbeelding' => 'assets/images/Fernsehturm.jpg', 'duur' => '1,5 uur', 'label' => 'Relaxed tempo'],
        ['titel' => 'Streetfood of foodmarkt', 'categorie' => 'eten', 'beschrijving' => 'Handig voor lunch of avondeten: veel keuze en vaak betaalbaar voor studenten.', 'afbeelding' => 'assets/images/eastside.jpg', 'duur' => 'Vrij', 'label' => 'Budgetvriendelijk'],
        ['titel' => 'Museum challenge', 'categorie' => 'route', 'beschrijving' => 'Geef de groep een korte opdracht of quiz voor extra focus tijdens het museumbezoek.', 'afbeelding' => 'assets/images/Museuminsel.jpg', 'duur' => '30 min', 'label' => 'Interactief'],
        ['titel' => 'Groepsfoto-stop', 'categorie' => 'route', 'beschrijving' => 'Plan een vaste fotospot bij een monument of uitzichtpunt voor een duidelijk excursiemoment.', 'afbeelding' => 'assets/images/reichstach.jpg', 'duur' => '10 min', 'label' => 'Makkelijk in te passen'],
    ];
}
?>

<section class="page-hero" data-filter-scope>

    <span class="eyebrow">Activiteiten & tips</span>

    <h2>Vijf ideeën die passen bij een schoolexcursie</h2>

    <p>
        Ideaal voor een afwisselend programma: bewegen, kijken, eten en een beetje vrije tijd.
        Veel van deze ideeën zijn ook makkelijk aan te passen aan de planning van docenten.
    </p>

    <div class="search-shell">
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Zoek een activiteit of tip" data-filter-input>
        </div>
    </div>

    <div class="filters">
        <button class="filter-chip is-active" type="button" data-filter-chip data-filter="all">Alles</button>
        <button class="filter-chip" type="button" data-filter-chip data-filter="route">Route</button>
        <button class="filter-chip" type="button" data-filter-chip data-filter="eten">Eten</button>
        <button class="filter-chip" type="button" data-filter-chip data-filter="avond">Avond</button>
    </div>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Activiteiten</h2>
            <p>Voorstel-opzet voor een afwisselende excursiedag.</p>
        </div>
        <span>5 ideeën</span>
    </div>

    <div class="card-grid">

        <?php foreach ($activities as $activity): ?>
            <article class="activity-card" data-filter-item data-category="<?php echo app_h($activity['categorie']); ?>" data-search-text="<?php echo app_h($activity['titel'] . ' ' . $activity['categorie'] . ' ' . $activity['beschrijving']); ?>">
                <div class="activity-icon"><i class="fa-solid fa-compass"></i></div>
                <h3><?php echo app_h($activity['titel']); ?></h3>
                <p><?php echo app_h($activity['beschrijving']); ?></p>
                <div class="activity-meta">
                    <span class="activity-pill"><?php echo app_h($activity['duur']); ?></span>
                    <span class="activity-pill"><?php echo app_h($activity['label']); ?></span>
                </div>
                <ul>
                    <li>Past goed binnen een excursiedag.</li>
                    <li>Handig om in een groepsplanning te zetten.</li>
                </ul>
            </article>
        <?php endforeach; ?>

    </div>

    <div class="empty-state" data-filter-empty hidden>
        <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
        <h3>Geen activiteiten gevonden</h3>
        <p>Probeer een bredere zoekterm of schakel terug naar alle categorieën.</p>
    </div>

</section>

<section class="section">

    <div class="notice">
        <strong>Docenten-tip:</strong> vraag vooraf welke vaste onderdelen al gepland zijn en gebruik deze ideeën als aanvulling.
    </div>

</section>

<?php include '../includes/footer.php'; ?>