<?php
include_once '../utilities/autoloader.php';
session_start();
$user = new client();
$res = $user->getByCriteria([
    htmlentities($_GET['toverify']) => [htmlentities($_GET['value']), "="],
    'ID' => [htmlentities($_SESSION['user']['id']), "<>"]
]);

$isAvailable = count($res->getData()) === 0;

header('Content-Type: application/json');

echo json_encode(['isAvailable' => $isAvailable]);