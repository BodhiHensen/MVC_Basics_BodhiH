<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <h3 class="text-success"><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-<?= $data['display']; ?> justify-content-center">
        <div class="col-6 text-begin text-<?= $data['color']; ?>">
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
                    <input name="naam" type="text" class="form-control <?php if (isset($data['errors']['naam'])): ?>is-invalid<?php endif; ?>" id="naam" value="<?= $_POST['naam'] ?? $data['zangeres']->Naam; ?>">
                    <?php if (isset($data['errors']['naam'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['naam']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input name="genre" type="text" class="form-control <?php if (isset($data['errors']['genre'])): ?>is-invalid<?php endif; ?>" id="genre" value="<?= $_POST['genre'] ?? $data['zangeres']->Genre; ?>">
                    <?php if (isset($data['errors']['genre'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['genre']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">Land</label>
                    <input name="land" type="text" class="form-control <?php if (isset($data['errors']['land'])): ?>is-invalid<?php endif; ?>" id="land" value="<?= $_POST['land'] ?? $data['zangeres']->Land; ?>">
                    <?php if (isset($data['errors']['land'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['land']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">Leeftijd</label>
                    <input name="leeftijd" type="number" class="form-control <?php if (isset($data['errors']['leeftijd'])): ?>is-invalid<?php endif; ?>" id="leeftijd" value="<?= $_POST['leeftijd'] ?? $data['zangeres']->Leeftijd; ?>">
                    <?php if (isset($data['errors']['leeftijd'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['leeftijd']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="vermogen" class="form-label">Vermogen (in euro's)</label>
                    <input name="vermogen" type="number" step="0.01" class="form-control <?php if (isset($data['errors']['vermogen'])): ?>is-invalid<?php endif; ?>" id="vermogen" value="<?= $_POST['vermogen'] ?? $data['zangeres']->Vermogen; ?>">
                    <?php if (isset($data['errors']['vermogen'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['vermogen']; ?></div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            <br>
            <a href="<?= URLROOT; ?>/ZangeresController/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
