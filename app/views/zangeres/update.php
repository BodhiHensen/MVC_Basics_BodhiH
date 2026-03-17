<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <h3 class="text-success"><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-<?= $data['display']; ?> justify-content-center">
        <div class="col-6 text-begin text-primary">
            <div class="alert alert-<?= $data['color']; ?>" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">
            <form action="<?= URLROOT; ?>/ZangeresController/update/<?= $data['zangeres']->Id; ?>" method="post">
                <input type="hidden" name="id" value="<?= $_POST['id'] ?? $data['zangeres']->Id; ?>">

                <div class="mb-3">
                    <label for="naam" class="form-label">Naam</label>
                    <input name="naam" type="text" class="form-control" id="naam" value="<?= $_POST['naam'] ?? $data['zangeres']->Naam; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input name="genre" type="text" class="form-control" id="genre" value="<?= $_POST['genre'] ?? $data['zangeres']->Genre; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">Land</label>
                    <input name="land" type="text" class="form-control" id="land" value="<?= $_POST['land'] ?? $data['zangeres']->Land; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">Leeftijd</label>
                    <input name="leeftijd" type="number" class="form-control" id="leeftijd" value="<?= $_POST['leeftijd'] ?? $data['zangeres']->Leeftijd; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="vermogen" class="form-label">Vermogen (in euro's)</label>
                    <input name="vermogen" type="number" step="0.01" class="form-control" id="vermogen" value="<?= $_POST['vermogen'] ?? $data['zangeres']->Vermogen; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            <br>
            <a href="<?= URLROOT; ?>/ZangeresController/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
