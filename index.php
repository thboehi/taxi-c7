<?php
// Récupérer la langue depuis l'URL
$request_uri = trim($_SERVER['REQUEST_URI'], '/');
$url_parts = explode('/', $request_uri);

// Définir la langue (fr, en, de) ou langue par défaut (en)
$lang = in_array($url_parts[0], ['fr', 'en', 'de', 'es', 'it', 'pt']) ? $url_parts[0] : 'fr';

// Charger le fichier de traduction correspondant
$lang_file = "lang/$lang.php";
if (!file_exists($lang_file)) {
    $lang_file = "lang/fr.php"; // Fallback à l'anglais
}
$trsl = include $lang_file;

?>

<!DOCTYPE html>

<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= htmlspecialchars($trsl['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($trsl['description']) ?>">
    <meta name="keywords" content="<?= $trsl['keywords']; ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="./favicon.svg">
    <link rel="stylesheet" href="./style.css?v=0.0.4">
    <meta name="theme-color" content="#F2F4F3" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://taxi-c7.ch/<?= htmlspecialchars($lang) ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($trsl['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($trsl['description']) ?>">
    <meta property="og:image" content="https://taxi-c7.ch/socials.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="taxi-c7.ch">
    <meta property="twitter:url" content="https://taxi-c7.ch/<?= htmlspecialchars($lang) ?>">
    <meta name="twitter:title" content="<?= htmlspecialchars($trsl['title']) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($trsl['description']) ?>">
    <meta name="twitter:image" content="https://taxi-c7.ch/socials.webp">

    <!-- GOOGLE FONT IMPORT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar" id="navbar">
        <img class="navbar-icon" src="./favicon.svg" alt="Logo de Taxi C7">
        <div class="navbar-actions">
            <div class="navbar-call">
                <a data-umami-event="Call button (navbar)" class="button-cta" href="tel:+41783223696">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <?= $trsl['call']; ?>
                </a>
            </div>
            <div class="navbar-lang" onclick="openLangMenu(this)">
                <p><?= htmlspecialchars($lang) ?></p>
                <ul>
                    <li><a href="/fr">Français</a></li>
                    <li><a href="/en">English</a></li>
                    <li><a href="/de">Deutsch</a></li>
                    <li><a href="/es">Español</a></li>
                    <li><a href="/it">Italiano</a></li>
                    <li><a href="/pt">Português</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <img id="hero-background-mobile" src="./img/banner-mobile.webp" alt="Une voiture en second plan avec un champs verdoyant en troisième plan.">
        <img id="hero-background-desktop" src="./img/banner.webp" alt="Une voiture en second plan avec un champs verdoyant en troisième plan.">
        <hero>
            <img id="hero-logo" src="./img/svg/c7_full_yellow.svg" alt="Logo de Taxi C7 complet">
        </hero>
    </header>
    
    <main>
        <section id="welcome">
            <div class="section-welcome-1st">
                <h3><?= htmlspecialchars($trsl['section-welcome-title']) ?></h3>
                <p><?= htmlspecialchars($trsl['section-welcome-description']) ?></p>
            </div>
            <div class="section-welcome-service">
                <h4><?= htmlspecialchars($trsl['section-welcome-service-title']) ?></h4>
                <p><?= htmlspecialchars($trsl['section-welcome-service-description']) ?></p>
            </div>
            <div class="section-welcome-adv">
                <h4><?= htmlspecialchars($trsl['section-welcome-adv-title']) ?></h4>
                <ul>
                    <li><strong><?= htmlspecialchars($trsl['section-welcome-adv-1-title']) ?></strong> - <?= htmlspecialchars($trsl['section-welcome-adv-1-description']) ?></li>

                    <li><strong><?= htmlspecialchars($trsl['section-welcome-adv-2-title']) ?></strong> - <?= htmlspecialchars($trsl['section-welcome-adv-2-description']) ?></li>

                    <li><strong><?= htmlspecialchars($trsl['section-welcome-adv-3-title']) ?></strong> - <?= htmlspecialchars($trsl['section-welcome-adv-3-description']) ?></li>

                    <li><strong><?= htmlspecialchars($trsl['section-welcome-adv-4-title']) ?></strong> - <?= htmlspecialchars($trsl['section-welcome-adv-4-description']) ?></li>

                    <li><strong><?= htmlspecialchars($trsl['section-welcome-adv-5-title']) ?></strong> - <?= htmlspecialchars($trsl['section-welcome-adv-5-description']) ?></li>

                    <li><strong><?= htmlspecialchars($trsl['section-welcome-adv-6-title']) ?></strong> - <?= htmlspecialchars($trsl['section-welcome-adv-6-description']) ?></li>
                </ul>
            </div>
            <h3><?= htmlspecialchars($trsl['section-welcome-end']) ?></h3>

            <div class="welcome-buttons">
                <a data-umami-event="Call button (bottom)" class="button-cta" href="tel:+41783223696">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <?= $trsl['call']; ?>
                </a>
                <a data-umami-event="Save vCard button" class="button-cta" href="./vcard.vcf" type="text/vcard" download="./vcard.vcf" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                    <?= $trsl['save']; ?>
                </a>
            </div>

            <p id="under-construction"><?= $trsl['section-welcome-construction']; ?></p>
        </section>
    </main>
    <script src="./index.js?v=0.0.4"></script>
</body>
</html>