<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$events = $eventController->indexEvents();
?>
<h2 class="text-center">Liste des évènements</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Nom </th>
            <th scope="col"> Actions </th>
        </tr>
    </thead>
    <tbody>
        <?php if($events): ?>
            <?php foreach($events as $event): ?>
                <tr>
                    <th><?= $event['id'] ?></th>
                    <th><?= $event['nom'] ?></th>
                    <th>
                        <a href="show.php?id=<?= $event['id'] ?>" class="btn btn-primary">Ouvrir</a>
                        <a href="edit.php?id=<?= $event['id'] ?>" class="btn btn-success">Modifier</a>
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
                    </th>
                </tr>
             <?php endforeach;?>
        <?php else: ?>
            <td colspan="3" class="text-center"> Pas d'évènements enregistrés</td>
        <?php endif; ?>

    </tbody>

</table>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/head/footer.php';
?>

