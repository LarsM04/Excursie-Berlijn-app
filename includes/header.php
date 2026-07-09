<?php
require_once __DIR__ . '/db.php';

if (!isset($base)) {
    $base = '';
}

if (!isset($pageTitle)) {
    $pageTitle = 'Berlin Trip';
}

if (!isset($activeNav)) {
    $activeNav = 'home';
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10243f">

    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">

</head>

<body>

<div class="phone">

    <header class="app-header">

        <div class="header-content">

            <div>
                <p class="header-kicker">Ontwikkelweek 2026</p>
                <h1>Berlin Trip</h1>
            </div>

            <span class="header-badge">Mobiele excursie-app</span>

        </div>

    </header>

    <main>