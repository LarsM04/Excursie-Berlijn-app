<?php
$base = '../';
$pageTitle = 'Zoekresultaten';
$activeNav = 'spots';
include '../includes/header.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';

$likeQuery = '%' . $query . '%';
$matchingSpots = $query === '' ? [] : app_fetch_all(
    'SELECT * FROM bezienswaardigheden WHERE titel LIKE ? OR categorie LIKE ? OR beschrijving LIKE ? ORDER BY id ASC',
    [$likeQuery, $likeQuery, $likeQuery]
);
$matchingActivities = $query === '' ? [] : app_fetch_all(
    'SELECT * FROM activiteiten WHERE titel LIKE ? OR categorie LIKE ? OR beschrijving LIKE ? ORDER BY id ASC',
    [$likeQuery, $likeQuery, $likeQuery]
);
?>

<section class="page-hero">

    <span class="eyebrow">Zoeken</span>

    <h2>Resultaten voor <?php echo $query !== '' ? htmlspecialchars($query, ENT_QUOTES, 'UTF-8') : 'je zoekopdracht'; ?></h2>

    <p>Gebruik deze pagina als startpunt om snel naar de juiste plek of activiteit te springen.</p>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Gevonden suggesties</h2>
            <p>Een kleine selectie om je op weg te helpen.</p>
        </div>
    </div>

    <?php if ($query === ''): ?>
        <div class="notice">
            <strong>Typ iets in om resultaten te zien.</strong> Bijvoorbeeld een bezienswaardigheid, categorie of activiteit.
        </div>
    <?php else: ?>
        <div class="card-grid">
            <?php foreach ($matchingSpots as $spot): ?>
                <article class="result-card">
                    <div class="result-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h3><?php echo app_h($spot['titel']); ?></h3>
                    <p><?php echo app_h($spot['beschrijving']); ?></p>
                </article>
            <?php endforeach; ?>

            <?php foreach ($matchingActivities as $activity): ?>
                <article class="result-card">
                    <div class="result-icon"><i class="fa-solid fa-compass"></i></div>
                    <h3><?php echo app_h($activity['titel']); ?></h3>
                    <p><?php echo app_h($activity['beschrijving']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <?php if ($matchingSpots === [] && $matchingActivities === []): ?>
            <div class="empty-state">
                <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                <h3>Niets gevonden</h3>
                <p>Probeer een andere zoekterm, bijvoorbeeld een categorie of een bekende plek.</p>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</section>

<?php include '../includes/footer.php'; ?>