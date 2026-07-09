<!DOCTYPE html>
<html lang="nl">

<head>

    <?php
    $scriptDirectory = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $basePath = preg_replace('#/(paginas|cms)(/.*)?$#', '', $scriptDirectory);

    if ($basePath === '') {
        $basePath = '/';
    }

    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Excursie Berlijn</title>

    <base href="<?php echo htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8'); ?>/">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<header>

    <div class="container">

        <div class="logo">

            🇩🇪 Berlin Trip

        </div>

    </div>

</header>

<main>