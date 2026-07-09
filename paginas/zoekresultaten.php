<?php
$base = '../';
$pageTitle = 'Zoekresultaten';
$activeNav = 'spots';
include '../includes/header.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';
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

    <div class="card-grid">
        <article class="result-card">
            <div class="result-icon"><i class="fa-solid fa-location-dot"></i></div>
            <h3>Brandenburger Tor</h3>
            <p>Een goede keuze als je zoekt op iconische plekken in het centrum.</p>
        </article>

        <article class="result-card">
            <div class="result-icon"><i class="fa-solid fa-compass"></i></div>
            <h3>Avondwandeling</h3>
            <p>Handig als je een ontspannen activiteit voor de groep zoekt.</p>
        </article>
    </div>

</section>

<?php include '../includes/footer.php'; ?>