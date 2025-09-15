<?php
$language = $_GET['lang'] ?? 'nl';
$texts = [
        'nl' => [
                'title' => 'Herfstspecial',
                'promo' => '🍂 Boek een kamer vanaf €99 per nacht inclusief ontbijt...',
                'button' => 'Reserveer nu'
        ],
        'en' => [
                'title' => 'Autumn Special',
                'promo' => '🍂 Book a room from €99 per night, including breakfast...',
                'button' => 'Reserve now'
        ]
];

?>





<?php include 'includes/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container mt-5">
    <h2><?= $texts[$language]['title'] ?></h2>
    <div class="alert alert-info">
        <?= $texts[$language]['promo'] ?>
    </div>
    <a href="contact.php?lang=<?= $language ?>" class="btn btn-success"><?= $texts[$language]['button'] ?></a>

</div>
<?php include 'includes/footer.php'; ?>
