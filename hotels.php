<?php include 'includes/header.php'; ?>
<div class="container mt-5">
    <h2>Onze Locaties</h2>
    <div class="row">
        <?php
        $hotels = [
            "Veluwe – midden in de natuur",
            "Oisterwijkse bossen – rust en ruimte",
            "Amsterdam – historische charme",
            "Breda – bourgondische gezelligheid"
        ];
        foreach ($hotels as $hotel): ?>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $hotel ?></h5>
                        <p class="card-text">Boek nu vanaf €120 per nacht. Late check-out inbegrepen.</p>
                        <a href="aanbiedingen.php?lang=<?= $language ?>" class="btn btn-outline-primary">Bekijk aanbieding</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
