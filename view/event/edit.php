<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$event = $eventController->show($_GET['id']);
$categories = $eventController->indexCategories();
?>


<form action="update.php" method="POST" autocomplete="off">
    <h2 class="text-center">Modification de l'evènement</h2>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="" value="<?= $event['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Nom de l'évènement</label>
        <div class="col-sm-10">
            <input type="text" name="nom" class="form-control" id="" value="<?= $event['nom']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Date de l'évènement</label>
        <div class="col-sm-10">
            <input type="date" name="date" class="form-control" id="" value="<?= $event['date']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Adresse de l'évènement</label>
        <div class="col-sm-10">
            <input type="text" name="adresse" class="form-control" id="" value="<?= $event['adresse']?>">
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-success">Valider</button>
        <a class="btn btn-danger" href="show.php?id=<?= $event['id'] ?>">Annuler</a>
    </div>
</form>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/footer.php';
?>
