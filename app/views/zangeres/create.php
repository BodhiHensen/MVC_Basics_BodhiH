<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <h3 class="text-success"><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-<?= $data['display']; ?> justify-content-center">
        <div class="col-6 text-begin text-primary">
            <div class="alert alert-success" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">
            <form action="<?= URLROOT; ?>/ZangeresController/create" method="post">
                <div class="mb-3">
                    <label for="naam" class="form-label">Naam</label>
                    <input name="naam" type="text" class="form-control" id="naam" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input name="genre" type="text" class="form-control" id="genre" required>
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">Land</label>
                    <input name="land" type="text" class="form-control" id="land" required>
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">Leeftijd</label>
                    <input name="leeftijd" type="number" class="form-control" id="leeftijd" required>
                </div>
                <div class="mb-3">
                    <label for="vermogen" class="form-label">Vermogen (in euro's)</label>
                    <input name="vermogen" type="number" step="0.01" class="form-control" id="vermogen" required>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            <br>
            <a href="<?= URLROOT; ?>/ZangeresController/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
