    </main>

    <nav class="bottom-nav" aria-label="Hoofdnavigatie">

        <a href="<?php echo $base; ?>index.php" class="<?php echo $activeNav === 'home' ? 'active' : ''; ?>">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>

        <a href="<?php echo $base; ?>paginas/bezienswaardigheden.php" class="<?php echo $activeNav === 'spots' ? 'active' : ''; ?>">
            <i class="fa-solid fa-location-dot"></i>
            <span>Plekken</span>
        </a>

        <a href="<?php echo $base; ?>paginas/activiteit.php" class="<?php echo $activeNav === 'activities' ? 'active' : ''; ?>">
            <i class="fa-solid fa-compass"></i>
            <span>Activiteiten</span>
        </a>

        <a href="<?php echo $base; ?>paginas/favorieten.php" class="<?php echo $activeNav === 'favorites' ? 'active' : ''; ?>">
            <i class="fa-solid fa-heart"></i>
            <span>Favorieten</span>
        </a>

        <a href="<?php echo $base; ?>paginas/praktisch.php" class="<?php echo $activeNav === 'info' ? 'active' : ''; ?>">
            <i class="fa-solid fa-circle-info"></i>
            <span>Info</span>
        </a>

    </nav>

</div>

<script src="<?php echo $base; ?>assets/js/app.js"></script>

</body>
</html>