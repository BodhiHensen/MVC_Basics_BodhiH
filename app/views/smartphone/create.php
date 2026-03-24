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
            <form action="<?= URLROOT; ?>/SmartphoneController/create" method="post">
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
                    <label for="prijs" class="form-label">Prijs</label>
                    <input name="prijs" type="number" step="0.01" class="form-control <?php if (isset($data['errors']['prijs'])): ?>is-invalid<?php endif; ?>" id="prijs" value="<?= $_POST['prijs'] ?? ''; ?>">
                    <?php if (isset($data['errors']['prijs'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['prijs']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="geheugen" class="form-label">Geheugen (GB)</label>
                    <input name="geheugen" type="number" class="form-control <?php if (isset($data['errors']['geheugen'])): ?>is-invalid<?php endif; ?>" id="geheugen" value="<?= $_POST['geheugen'] ?? ''; ?>">
                    <?php if (isset($data['errors']['geheugen'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['geheugen']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="besturingssysteem" class="form-label">Besturingssysteem</label>
                    <input name="besturingssysteem" type="text" class="form-control <?php if (isset($data['errors']['besturingssysteem'])): ?>is-invalid<?php endif; ?>" id="besturingssysteem" value="<?= $_POST['besturingssysteem'] ?? ''; ?>">
                    <?php if (isset($data['errors']['besturingssysteem'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['besturingssysteem']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="schermgrootte" class="form-label">Schermgrootte (inch)</label>
                    <input name="schermgrootte" type="number" step="0.01" class="form-control <?php if (isset($data['errors']['schermgrootte'])): ?>is-invalid<?php endif; ?>" id="schermgrootte" value="<?= $_POST['schermgrootte'] ?? ''; ?>">
                    <?php if (isset($data['errors']['schermgrootte'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['schermgrootte']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input name="releasedatum" type="date" class="form-control <?php if (isset($data['errors']['releasedatum'])): ?>is-invalid<?php endif; ?>" id="releasedatum" value="<?= $_POST['releasedatum'] ?? ''; ?>">
                    <?php if (isset($data['errors']['releasedatum'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['releasedatum']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="megapixels" class="form-label">MegaPixels</label>
                    <input name="megapixels" type="number" class="form-control <?php if (isset($data['errors']['megapixels'])): ?>is-invalid<?php endif; ?>" id="megapixels" value="<?= $_POST['megapixels'] ?? ''; ?>">
                    <?php if (isset($data['errors']['megapixels'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['megapixels']; ?></div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            <br>
            <a href="<?= URLROOT; ?>/SmartphoneController/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>