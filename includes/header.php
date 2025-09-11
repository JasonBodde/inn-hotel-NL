<?php
$language = $_GET['lang'] ?? 'nl';
$texts = [
    'nl' => ['Home', 'Hotels', 'Aanbiedingen', 'Contact'],
    'en' => ['Home', 'Hotels', 'Offers', 'Contact']
];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="index.php?lang=<?= $language ?>">Best-Inn Hotels</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php?lang=<?= $language ?>"><?= $texts[$language][0] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="hotels.php?lang=<?= $language ?>"><?= $texts[$language][1] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="aanbiedingen.php?lang=<?= $language ?>"><?= $texts[$language][2] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php?lang=<?= $language ?>"><?= $texts[$language][3] ?></a></li>
        </ul>
        <div class="ms-3">
            <a href="?lang=nl">🇳🇱</a> <a href="?lang=en">🇬🇧</a>
        </div>
    </div>
</nav>
