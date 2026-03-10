<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
    </div>

    <!-- Terugkoppeling melding -->
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
                        <th>Verwijder</th> <!-- Nieuwe kolom header -->
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($data['result'])) : ?>
                        <?php foreach($data['result'] as $sneaker) : ?>
                            <tr>
                                <td><?= $sneaker->Merk; ?></td>
                                <td><?= $sneaker->Model; ?></td>
                                <td><?= $sneaker->Type; ?></td>
                                <td class="text-center">
                                    <!-- Delete knop met popup -->
                                    <a href="<?= URLROOT; ?>/SneakerController/delete/<?= $sneaker->Id; ?>" 
                                       onclick="return confirm('Weet je zeker dat je deze sneaker wilt verwijderen?');">
                                       <i class="bi bi-trash3-fill text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">Geen sneakers gevonden</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            
            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>