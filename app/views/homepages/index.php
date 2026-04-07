<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <h2><?php echo $data['title']; ?></h2>
            <p class="lead">Welkom bij MVC Basics. Selecteer een categorie in de navbar om de CRUD functionaliteit te bekijken.</p>
        </div>
    </div>

    <div class="row mt-4 mb-5">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-phone card-icon text-primary"></i>
                    <h5 class="card-title mt-3">Smartphones</h5>
                    <p class="card-text">Beheer een overzicht van smartphones met merk, model, prijs en specificaties.</p>
                    <a href="<?= URLROOT; ?>/SmartphoneController/index" class="btn btn-primary">Bekijk Smartphones</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-check2-circle card-icon text-success"></i>
                    <h5 class="card-title mt-3">Sneakers</h5>
                    <p class="card-text">Beheer een overzicht van sneakers met merk, model en type.</p>
                    <a href="<?= URLROOT; ?>/SneakerController/index" class="btn btn-success">Bekijk Sneakers</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-clock card-icon text-warning"></i>
                    <h5 class="card-title mt-3">Horloges</h5>
                    <p class="card-text">Beheer een overzicht van luxe horloges met merk, model, prijs en materiaal.</p>
                    <a href="<?= URLROOT; ?>/HorlogeController/index" class="btn btn-warning">Bekijk Horloges</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-music-note-beamed card-icon text-danger"></i>
                    <h5 class="card-title mt-3">Zangeressen</h5>
                    <p class="card-text">Beheer een overzicht van de rijkste zangeressen ter wereld.</p>
                    <a href="<?= URLROOT; ?>/ZangeresController/index" class="btn btn-danger">Bekijk Zangeressen</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>