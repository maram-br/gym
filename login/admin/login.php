<?php
session_start();
if (isset($_SESSION['user']) && !isset($_SESSION['user']['email'])) {
    header('Location: ../../user.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['name'])) {
        echo "Email is required";
        header('Location: ../../signup/index.html');
        exit();
    }
    if (!isset($_POST['password'])) {
        echo "Password is required";
        header('Location: ../../signup/index.html');
        exit();
    }
    include_once '../../utilities/autoloader.php';
    $admin = new admin();
    $name = htmlentities($_POST['name']);
    $password = htmlentities($_POST['password']);
    $res = $admin->login($name, $password);
    if ($res->getStatus()) {
        header('Location: ../../admin page/index.php');
        exit();
    } else {
        echo $res->getMessage();
        header('Refresh: 5; URL=./index.php');
        exit;
    }
}
echo "Invalid request";
header('Location: ../../index.html');
exit();