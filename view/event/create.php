<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$categories = $eventController->indexCategories();
?>

<h2 class="text-center">Création de l'évènement</h2>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="" class="form-label">Nom de l'évènement</label>
        <input required type="text" name="nom" class="form-control" id="" aria-describedby="">
    </div>

     <div class="mb-3">
            <label for="" class="form-label">Date de l'évènement</label>
            <input required type="date" name="date" class="form-control" id="" aria-describedby="">
     </div>

    <div class="mb-3">
        <label for="" class="form-label">Adresse de l'évènement</label>
        <input required type="text" name="adresse" class="form-control" id="" aria-describedby="">
    </div>


    <div class="mb-3">
        <label for="" class="form-label">Catégorie de l'évènement</label>
        <select name="categorie">
            <?php foreach($categories as $index=>$category): ?>
                <option value="<?= $index ?>"><?= $category['nom'] ?></option>
            <?php endforeach;?>
        </select>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <a class="btn btn-danger" href="index.php">Annuler</a>
    </div>


</form>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/footer.php';
?>


