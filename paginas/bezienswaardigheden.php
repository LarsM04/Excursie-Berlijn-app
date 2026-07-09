<?php
$base = '../';
$pageTitle = 'Bezienswaardigheden';
$activeNav = 'spots';
include '../includes/header.php';
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

        <article class="card" data-filter-item data-category="historisch" data-search-text="Brandenburger Tor historisch centrum bekende poort">
            <div class="card-media">
                <img src="../assets/images/Brandenburg.jpg" alt="Brandenburger Tor">
                <span class="card-badge"><i class="fa-solid fa-landmark"></i> Historisch</span>
            </div>
            <div class="card-content">
                <span class="tag">Centrum</span>
                <h3>Brandenburger Tor</h3>
                <p>Het meest herkenbare monument van Berlijn en een fijne startplek voor foto’s.</p>
                <div class="meta-row">
                    <span class="meta-pill"><i class="fa-regular fa-clock"></i> 15 min</span>
                    <span class="meta-pill"><i class="fa-solid fa-euro-sign"></i> Gratis</span>
                </div>
            </div>
        </article>

        <article class="card" data-filter-item data-category="historisch" data-search-text="Reichstag parlement glazen koepel uitzicht">
            <div class="card-media">
                <img src="../assets/images/reichstach.jpg" alt="Reichstag">
                <span class="card-badge"><i class="fa-solid fa-building-columns"></i> Parlement</span>
            </div>
            <div class="card-content">
                <span class="tag">Politiek</span>
                <h3>Reichstag</h3>
                <p>Een indrukwekkend parlementsgebouw met een bekende koepel en uitzicht over de stad.</p>
                <div class="meta-row">
                    <span class="meta-pill"><i class="fa-regular fa-clock"></i> 30 min</span>
                    <span class="meta-pill"><i class="fa-solid fa-camera"></i> Populair</span>
                </div>
            </div>
        </article>

        <article class="card" data-filter-item data-category="kunst" data-search-text="Museuminsel musea kunst cultuur eiland">
            <div class="card-media">
                <img src="../assets/images/Museuminsel.jpg" alt="Museuminsel">
                <span class="card-badge"><i class="fa-solid fa-palette"></i> Kunst</span>
            </div>
            <div class="card-content">
                <span class="tag">Museumwijk</span>
                <h3>Museuminsel</h3>
                <p>Een sterk cultuurcluster met verschillende musea op loopafstand van elkaar.</p>
                <div class="meta-row">
                    <span class="meta-pill"><i class="fa-regular fa-clock"></i> 45 min</span>
                    <span class="meta-pill"><i class="fa-solid fa-ticket"></i> Museumstop</span>
                </div>
            </div>
        </article>

        <article class="card" data-filter-item data-category="uitzicht" data-search-text="Fernsehturm uitzicht toren panorama alexanderplatz">
            <div class="card-media">
                <img src="../assets/images/Fernsehturm.jpg" alt="Fernsehturm">
                <span class="card-badge"><i class="fa-solid fa-eye"></i> Uitzicht</span>
            </div>
            <div class="card-content">
                <span class="tag">Panorama</span>
                <h3>Fernsehturm</h3>
                <p>De televisietoren geeft je een sterk uitzicht over de stad en is herkenbaar vanaf veel plekken.</p>
                <div class="meta-row">
                    <span class="meta-pill"><i class="fa-regular fa-clock"></i> 40 min</span>
                    <span class="meta-pill"><i class="fa-solid fa-mountain-city"></i> Skyline</span>
                </div>
            </div>
        </article>

        <article class="card" data-filter-item data-category="kunst" data-search-text="East Side Gallery street art muur openlucht kunst">
            <div class="card-media">
                <img src="../assets/images/eastside.jpg" alt="East Side Gallery">
                <span class="card-badge"><i class="fa-solid fa-spray-can-sparkles"></i> Street art</span>
            </div>
            <div class="card-content">
                <span class="tag">Openlucht</span>
                <h3>East Side Gallery</h3>
                <p>De langste openluchtgalerie van de stad, perfect voor studenten die van street art houden.</p>
                <div class="meta-row">
                    <span class="meta-pill"><i class="fa-regular fa-clock"></i> 25 min</span>
                    <span class="meta-pill"><i class="fa-solid fa-heart"></i> Favoriet</span>
                </div>
            </div>
        </article>

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