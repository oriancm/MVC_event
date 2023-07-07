<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$eventController->update($_POST['id'], $_POST['nom'], $_POST['date'], $_POST['adresse'], $_POST['category']);

?>
