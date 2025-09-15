<?php
$language = $_GET['lang'] ?? 'nl';

$texts = [
        'nl' => [
                'title' => 'Herfstcomfort voor de harde werkers bij Best-Inn Hotels',
                'paragraph' => '🍂 De herfst brengt frisse ochtenden, vallende bladeren en een verlangen naar warmte en rust. 
        Voor werklui en zakenmannen die onderweg zijn, bieden onze hotels precies dat: een comfortabele plek om op te laden na een lange dag. 
        Denk aan stevige bedden, warme douches en een stevig ontbijt om de dag goed te beginnen. 
        Onze locaties liggen dicht bij industrieterreinen en zakelijke knooppunten, zodat u nooit ver hoeft te reizen. 
        Of u nu een project afrondt of een deal sluit, wij zorgen voor een ontspannen tussenstop. Boek vandaag nog en ervaar herfstgastvrijheid op z’n best.',
                'button' => 'Bekijk Herfstaanbieding'
        ],
        'en' => [
                'title' => 'Autumn comfort for hardworking professionals at Best-Inn Hotels',
                'paragraph' => '🍂 Autumn brings crisp mornings, falling leaves, and a longing for warmth and rest. 
        For workers and business travelers on the road, our hotels offer exactly that: a comfortable place to recharge after a long day. 
        Think sturdy beds, hot showers, and a hearty breakfast to start the day right. 
        Our locations are close to industrial areas and business hubs, so you never have to travel far. 
        Whether you’re wrapping up a project or closing a deal, we provide a relaxing stopover. Book today and experience autumn hospitality at its finest.',
                'button' => 'View Autumn Offer'
        ]
];
?>

<?php include 'includes/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-5">
    <h1 class="text-primary"><?= $texts[$language]['title'] ?></h1>
    <p><?= $texts[$language]['paragraph'] ?></p>
    <img src="assets/boshuisje.jpg" alt="Herfst in Nederland" class="img-fluid img-thumbnail rounded mb-3">
    <a href="aanbiedingen.php?lang=<?= $language ?>" class="btn btn-success"><?= $texts[$language]['button'] ?></a>
</div>

<?php include 'includes/footer.php'; ?>
