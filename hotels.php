<?php include 'includes/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container mt-5">

<?php
$language = $_GET['lang'] ?? 'nl';
$texts = [
    'nl' => [
        'title' => 'Onze Locaties',
        'description' => 'Boek nu vanaf €120 per nacht. Late check-out inbegrepen.',
        'button' => 'Bekijk aanbieding',
        'hotels' => [
            "Veluwe – midden in de natuur",
            "Oisterwijkse bossen – rust en ruimte",
            "Amsterdam – historische charme",
            "Breda – bourgondische gezelligheid"
        ]
    ],
    'en' => [
        'title' => 'Our Locations',
        'description' => 'Book now from €120 per night. Late check-out included.',
        'button' => 'View offer',
        'hotels' => [
            "Veluwe – surrounded by nature",
            "Oisterwijk Forest – peace and space",
            "Amsterdam – historic charm",
            "Breda – Burgundian hospitality"
        ]
    ]
];
?><h2><?= $texts[$language]['title'] ?></h2>
    <div class="row">
        <?php foreach ($texts[$language]['hotels'] as $hotel): ?>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $hotel ?></h5>
                        <p class="card-text"><?= $texts[$language]['description'] ?></p>
                        <a href="aanbiedingen.php?lang=<?= $language ?>" class="btn btn-outline-primary"><?= $texts[$language]['button'] ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?php include 'includes/footer.php'; ?>
