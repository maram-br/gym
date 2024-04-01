<?php
if (isset($_SESSION['user'])) {
    header('Location: ../../user.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['email'])) {

        echo "Email is required";
        header('Location: ../../signup/index.php');
        exit();
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        echo "Email is invalid";
        header('Location: ../../signup/index.php');
        exit();
    }
    if (!isset($_POST['password'])) {
        echo "Password is required";
        header('Location: ../../signup/index.php');
        exit();
    }
    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20) {
        echo "Password must be at least 8 characters long and less than 20 characters long";
        header('Location: ../../signup/index.php');
        exit();
    }
    $regex = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/';
    if (!preg_match($regex, $_POST['password'])) {
        echo "Password must contain at least one uppercase letter, one lowercase letter, and one number";
        header('Location: ../../signup/index.php');
        exit();
    }
    include_once '../../utilities/autoloader.php';
    $client = new client();
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $res = $client->login($email, $password);
    if ($res->getStatus()) {
        header('Location: ../../user.php');
        exit();
    } else {
        $message = json_encode($res->getMessage());
        echo "<script>
    alert($message);
    window.location.href='index.php';
            </script>";
        exit();
    }
} else {
    echo "Invalid request";
    header('Refresh:5 url: ../../index.html');
    exit();
}
