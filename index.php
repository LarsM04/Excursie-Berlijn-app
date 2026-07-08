<?php
include 'includes/header.php';
?>

<section class="hero">

    <h1>Ontdek Berlijn</h1>

    <p>
        Alles wat je nodig hebt voor de excursie van november.
    </p>

    <input
        type="text"
        placeholder="Zoek een bezienswaardigheid..."
        class="search">

</section>

<section class="section">

    <div class="title">

        <h2>Populaire plekken</h2>

        <a href="paginas/bezienswaardigheden.php">
            Bekijk alles
        </a>

    </div>

    <div class="cards">

        <div class="card">

            <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?w=800" alt="">

            <div class="card-body">

                <h3>Brandenburger Tor</h3>

                <p>Het bekendste monument van Berlijn.</p>

            </div>

        </div>

        <div class="card">

            <img src="https://images.unsplash.com/photo-1528728329032-2972f65dfb3f?w=800" alt="">

            <div class="card-body">

                <h3>East Side Gallery</h3>

                <p>Het langste overgebleven stuk van de Berlijnse Muur.</p>

            </div>

        </div>

    </div>

</section>

<section class="section">

    <div class="title">

        <h2>Activiteiten</h2>

    </div>

    <div class="cards">

        <div class="card">

            <div class="card-body">

                <h3>Boottocht over de Spree</h3>

                <p>Bekijk Berlijn vanaf het water.</p>

            </div>

        </div>

        <div class="card">

            <div class="card-body">

                <h3>Berlin Dungeon</h3>

                <p>Een spannende interactieve attractie.</p>

            </div>

        </div>

    </div>

</section>

<?php
include 'includes/footer.php';
?>