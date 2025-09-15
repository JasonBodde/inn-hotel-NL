<?php
$language = $_GET['lang'] ?? 'nl';

$texts = [
        'nl' => [
                'title' => 'Neem contact op',
                'name' => 'Naam',
                'email' => 'E-mail',
                'message' => 'Bericht',
                'placeholder_name' => 'Uw naam',
                'placeholder_email' => 'Uw e-mailadres',
                'placeholder_message' => 'Uw vraag of opmerking',
                'submit' => 'Verstuur'
        ],
        'en' => [
                'title' => 'Contact us',
                'name' => 'Name',
                'email' => 'Email',
                'message' => 'Message',
                'placeholder_name' => 'Your name',
                'placeholder_email' => 'Your email address',
                'placeholder_message' => 'Your question or comment',
                'submit' => 'Send'
        ]
];
?>

<?php include 'includes/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-5">
    <h2><?= $texts[$language]['title'] ?></h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label"><?= $texts[$language]['name'] ?></label>
            <input type="text" class="form-control" id="name" placeholder="<?= $texts[$language]['placeholder_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><?= $texts[$language]['email'] ?></label>
            <input type="email" class="form-control" id="email" placeholder="<?= $texts[$language]['placeholder_email'] ?>">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label"><?= $texts[$language]['message'] ?></label>
            <textarea class="form-control" id="message" rows="4" placeholder="<?= $texts[$language]['placeholder_message'] ?>"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><?= $texts[$language]['submit'] ?></button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
