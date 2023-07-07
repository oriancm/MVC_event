<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$event = $eventController->show($_GET['id']);
?>

<h2 class="text-center"> Synthèse de l'évènement crée</h2>

<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Liste des évènements</a>
    <a href="edit.php?id=<?= $event[0] ?>" class="btn btn-success"> Modifier</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Souhaitez-vous vraiment supprimer cet évènement?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    L'évènement et ses informations seront définitivement perdus
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href="delete.php?id=<?= $event[0] ?>" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Nom </th>
            <th scope="col"> Date </th>
            <th scope="col"> Adresse </th>
            <th scope="col"> Catégorie </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $event['id'] ?></td>
            <td scope="col"><?= $event['nom'] ?></td>
            <td scope="col"><?= $event['date'] ?></td>
            <td scope="col"><?= $event['adresse'] ?></td>
            <td scope="col"><?= $event[4] ?></td>
        </tr>
    </tbody>

</table>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/footer.php';
?>
