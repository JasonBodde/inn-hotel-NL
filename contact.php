<?php include 'includes/header.php'; ?>
<div class="container mt-5">
    <h2>Neem contact op</h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" class="form-control" id="name" placeholder="Uw naam">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Uw e-mailadres">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Bericht</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Uw vraag of opmerking"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Verstuur</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>
