<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <h3 class="text-success"><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-<?= $data['display']; ?> justify-content-center">
        <div class="col-6 text-begin text-<?= isset($data['color']) ? $data['color'] : 'success'; ?>">
            <div class="alert alert-<?= isset($data['color']) ? $data['color'] : 'success'; ?>" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">
            <form action="<?= URLROOT; ?>/HorlogeController/create" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input name="merk" type="text" class="form-control <?php if (isset($data['errors']['merk'])): ?>is-invalid<?php endif; ?>" id="merk" value="<?= $_POST['merk'] ?? ''; ?>">
                    <?php if (isset($data['errors']['merk'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['merk']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input name="model" type="text" class="form-control <?php if (isset($data['errors']['model'])): ?>is-invalid<?php endif; ?>" id="model" value="<?= $_POST['model'] ?? ''; ?>">
                    <?php if (isset($data['errors']['model'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['model']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input name="type" type="text" class="form-control <?php if (isset($data['errors']['type'])): ?>is-invalid<?php endif; ?>" id="type" value="<?= $_POST['type'] ?? ''; ?>">
                    <?php if (isset($data['errors']['type'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['type']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input name="prijs" type="number" step="0.01" class="form-control <?php if (isset($data['errors']['prijs'])): ?>is-invalid<?php endif; ?>" id="prijs" value="<?= $_POST['prijs'] ?? ''; ?>">
                    <?php if (isset($data['errors']['prijs'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['prijs']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="materiaal" class="form-label">Materiaal</label>
                    <input name="materiaal" type="text" class="form-control <?php if (isset($data['errors']['materiaal'])): ?>is-invalid<?php endif; ?>" id="materiaal" value="<?= $_POST['materiaal'] ?? ''; ?>">
                    <?php if (isset($data['errors']['materiaal'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['materiaal']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="gewicht" class="form-label">Gewicht (gram)</label>
                    <input name="gewicht" type="number" class="form-control <?php if (isset($data['errors']['gewicht'])): ?>is-invalid<?php endif; ?>" id="gewicht" value="<?= $_POST['gewicht'] ?? ''; ?>">
                    <?php if (isset($data['errors']['gewicht'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['gewicht']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input name="releasedatum" type="date" class="form-control <?php if (isset($data['errors']['releasedatum'])): ?>is-invalid<?php endif; ?>" id="releasedatum" value="<?= $_POST['releasedatum'] ?? ''; ?>">
                    <?php if (isset($data['errors']['releasedatum'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['releasedatum']; ?></div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            <br>
            <a href="<?= URLROOT; ?>/HorlogeController/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>