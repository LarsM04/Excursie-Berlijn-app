<?php
$base = '../';
$pageTitle = 'Activiteiten en tips';
$activeNav = 'activities';
include '../includes/header.php';
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

        <article class="activity-card" data-filter-item data-category="route" data-search-text="Fietstour centrum route studenten stad">
            <div class="activity-icon"><i class="fa-solid fa-bicycle"></i></div>
            <h3>Fietstour langs highlights</h3>
            <p>Een actieve start waarmee je in korte tijd veel van de stad ziet.</p>
            <div class="activity-meta">
                <span class="activity-pill">2 uur</span>
                <span class="activity-pill">Groepsactiviteit</span>
            </div>
            <ul>
                <li>Goed voor de eerste dag.</li>
                <li>Combineer met korte fotostops.</li>
            </ul>
        </article>

        <article class="activity-card" data-filter-item data-category="avond" data-search-text="Avondwandeling lichtjes avond route tips">
            <div class="activity-icon"><i class="fa-solid fa-moon"></i></div>
            <h3>Avondwandeling door het centrum</h3>
            <p>Rustig wandelen langs bekende plekken en de stad in de avond ervaren.</p>
            <div class="activity-meta">
                <span class="activity-pill">1,5 uur</span>
                <span class="activity-pill">Relaxed tempo</span>
            </div>
            <ul>
                <li>Fijn na een druk museumbezoek.</li>
                <li>Ideaal voor een groep die weinig wil reizen.</li>
            </ul>
        </article>

        <article class="activity-card" data-filter-item data-category="eten" data-search-text="Street food foodmarkt lunch eten budget studenten">
            <div class="activity-icon"><i class="fa-solid fa-burger"></i></div>
            <h3>Streetfood of foodmarkt</h3>
            <p>Handig voor lunch of avondeten: veel keuze en vaak betaalbaar voor studenten.</p>
            <div class="activity-meta">
                <span class="activity-pill">Vrij in te plannen</span>
                <span class="activity-pill">Budgetvriendelijk</span>
            </div>
            <ul>
                <li>Perfect als tussenstop.</li>
                <li>Laat leerlingen zelf kiezen.</li>
            </ul>
        </article>

        <article class="activity-card" data-filter-item data-category="route" data-search-text="Museum challenge quiz route opdrachten groep">
            <div class="activity-icon"><i class="fa-solid fa-circle-question"></i></div>
            <h3>Museum challenge</h3>
            <p>Geef de groep een korte opdracht of quiz voor extra focus tijdens het museumbezoek.</p>
            <div class="activity-meta">
                <span class="activity-pill">30 min</span>
                <span class="activity-pill">Interactief</span>
            </div>
            <ul>
                <li>Maakt kijken actiever.</li>
                <li>Past goed bij een schoolopdracht.</li>
            </ul>
        </article>

        <article class="activity-card" data-filter-item data-category="route" data-search-text="Groepsfoto spot uitzicht stop plek">
            <div class="activity-icon"><i class="fa-solid fa-camera-retro"></i></div>
            <h3>Groepsfoto-stop</h3>
            <p>Plan een vaste fotospot bij een monument of uitzichtpunt voor een duidelijk excursiemoment.</p>
            <div class="activity-meta">
                <span class="activity-pill">10 min</span>
                <span class="activity-pill">Makkelijk in te passen</span>
            </div>
            <ul>
                <li>Leuk voor de herinnering.</li>
                <li>Handig als rustpunt in de planning.</li>
            </ul>
        </article>

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