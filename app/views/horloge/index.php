<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
    </div>

    <!-- Terugkoppeling melding voor na het verwijderen -->
    <div class="row mt-3 d-<?= $data['display']; ?> justify-content-center">
        <div class="col-10 text-begin text-primary">
            <div class="alert alert-success" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Type</th>
                        <th>Prijs</th>
                        <th>Materiaal</th>
                        <th>Gewicht</th>
                        <th>Releasedatum</th>
                        <th>Verwijder</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($data['result']) && count($data['result']) > 0) : ?>
                        <?php foreach($data['result'] as $horloge) : ?>
                            <tr>
                                <td><?= $horloge->Merk; ?></td>
                                <td><?= $horloge->Model; ?></td>
                                <td><?= $horloge->Type; ?></td>
                                <td>&euro; <?= $horloge->Prijs; ?></td>
                                <td><?= $horloge->Materiaal; ?></td>
                                <td><?= $horloge->Gewicht; ?></td>
                                <td><?= $horloge->Releasedatum; ?></td>
                                <td class="text-center">
                                    <!-- De delete knop met de prullenbak -->
                                    <a href="<?= URLROOT; ?>/HorlogeController/delete/<?= $horloge->Id; ?>" 
                                       onclick="return confirm('Weet je zeker dat je dit horloge wilt verwijderen?');">
                                       <i class="bi bi-trash3-fill text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="8" class="text-center">Geen horloges gevonden in de database.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            
            <!-- Link terug naar de homepagina -->
            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>