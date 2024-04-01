<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../user.php');
    exit();
}
include_once '../utilities/autoloader.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['name'])) {
        echo "Name is required";
        header('Location: ../signup/index.html');
        exit();
    }
    if (strlen($_POST['name']) < 4 || strlen($_POST['name']) > 20) {
        echo "Name must be at least 4 characters long and less than 20 characters long";
        header('Location: ../signup/index.html');
        exit();
    }
    $regex = '/^[a-zA-Z][_a-zA-Z0-9-]+$/';
    if (!preg_match($regex, $_POST['name'])) {
        echo "Name is invalid";
        header('Location: ../signup/index.html');
        exit();
    }

    if (!isset($_POST['email'])) {

        echo "Email is required";
        header('Location: ../signup/index.html');
        exit();
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        echo "Email is invalid";
        header('Location: ../signup/index.html');
        exit();
    }
    if (!isset($_POST['phonenumber'])) {
        echo "Phone number is required";
        header('Location: ../signup/index.html');
        exit();
    }
    if (strlen($_POST['phonenumber']) != 8 || !is_numeric($_POST['phonenumber'])) {
        echo "Phone number is invalid";
        header('Location: ../signup/index.html');
        exit();
    }
    if (!isset($_POST['password'])) {
        echo "Password is required";
        header('Location: ../signup/index.html');
        exit();
    }
    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20) {
        echo "Password must be at least 8 characters long and less than 20 characters long";
        header('Location: ../signup/index.html');
        exit();
    }
    $regex = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/';
    if (!preg_match($regex, $_POST['password'])) {
        echo "Password must contain at least one uppercase letter, one lowercase letter, and one number";
        header('Location: ../signup/index.html');
        exit();
    }
    if (!isset($_POST['password2'])) {
        echo "Password confirmation is required";
        header('Location: ../signup/index.html');
        exit();
    }
    if ($_POST['password'] !== $_POST['password2']) {
        echo "Passwords do not match";
        header('Location: ../signup/index.html');
        exit();
    }
    if (!isset($_POST['terms'])) {
        echo "You must agree to the terms and conditions";
        header('Location: ../signup/index.html');
        exit();
    }

    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $phonenumber = htmlentities($_POST['phonenumber']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 10]);

    $user = new client();
    $response = $user->signup(['name' => $name, 'email' => $email, 'PHONE_NUMBER' => $phonenumber, 'password' => $password]);
    if (!$response->getStatus()) {
        echo "There was a problem adding a new client";
        header('Location: ../signup/index.php');
        exit();
    }
    $emailToSend = $email;
    include_once '../utilities/sendMail.php';
    echo "You have successfully signed up";
    header('Location: ../login/user/index.php');
    exit();
} else {
    echo "Invalid request";
    header('Location: ../signup/index.php');
    exit();
}

