<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/control/eventController.php';
$eventController = new eventController();
$eventController->delete($_GET['id']);

?>