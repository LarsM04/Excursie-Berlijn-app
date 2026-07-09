<?php
$base = '../';
$pageTitle = 'Favorieten';
$activeNav = 'favorites';
include '../includes/header.php';
?>

<section class="page-hero">

    <span class="eyebrow">Favorieten</span>

    <h2>Bewaar de plekken die je niet wilt missen</h2>

    <p>
        Deze pagina geeft een overzicht van je favorieten en helpt je om tijdens de excursie sneller keuzes te maken.
    </p>

</section>

<section class="section">

    <div class="empty-state">
        <div class="icon"><i class="fa-solid fa-heart"></i></div>
        <h3>Nog geen favorieten opgeslagen</h3>
        <p>Gebruik deze pagina als overzichtspagina voor jouw mooiste stops en handigste tips.</p>
        <div class="card-actions" style="justify-content:center;">
            <a href="bezienswaardigheden.php" class="button">Bekijk plekken</a>
            <a href="activiteit.php" class="button-secondary">Bekijk activiteiten</a>
        </div>
    </div>

</section>

<section class="section">

    <div class="section-title">
        <div>
            <h2>Aanraders om op te slaan</h2>
            <p>Handige selectie als startpunt.</p>
        </div>
    </div>

    <div class="card-grid">
        <article class="result-card">
            <div class="result-icon"><i class="fa-solid fa-landmark"></i></div>
            <h3>Brandenburger Tor</h3>
            <p>Een klassieker voor de eerste excursiefoto.</p>
        </article>

        <article class="result-card">
            <div class="result-icon"><i class="fa-solid fa-burger"></i></div>
            <h3>Streetfood-stop</h3>
            <p>Fijn voor een snelle en betaalbare lunch met de groep.</p>
        </article>
    </div>

</section>

<?php include '../includes/footer.php'; ?>