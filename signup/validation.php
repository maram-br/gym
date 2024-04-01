<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../index.html');
    exit;
}

include_once '../utilities/autoloader.php';

$user = new client();
$res = $user->getByCriteria([htmlentities($_GET['toverify']) => [htmlentities($_GET['value']), "="]]);

$isAvailable = count($res->getData()) === 0;

header('Content-Type: application/json');

echo json_encode(['isAvailable' => $isAvailable]);