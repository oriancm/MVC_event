<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$eventController->save($_POST['nom'], $_POST['date'], $_POST['adresse'], $_POST['categorie']);
