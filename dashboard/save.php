<?php
require_once '../utilities/autoloader.php';
session_start();
$id = $_SESSION['user']['id'];
if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['phonenumber'])) {
    $name = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    $phonenumber = htmlentities($_POST['phonenumber']);
    $data = [
        'name' => $name,
        'email' => $email,
        'phone_number' => $phonenumber,
    ];
    if (isset($_POST['password']) && $_POST['password'] != "") {
        $data['password'] = password_hash(htmlentities($_POST['password']), PASSWORD_BCRYPT, ["cost" => 10]);
    }
    $cl = new Client();
    $res = $cl->update($id, $data);
    header("Location: ../dashboard/index.php");
    exit;
} else {
    echo "Error: information not provided.";
}
