<?php
require_once '../../dompdf/vendor/autoload.php';
require_once '../../utilities/autoloader.php';
session_start();
use Dompdf\Dompdf;

if (!isset($_SESSION['user'])) {
    header('Location: ../login/user/index.php');
  } else {
$id = $_SESSION['user']['id'];
$client = new client();
$client = $client->findById($id)->getData()[0];
$offre_cl = new offreClient();
$test = $offre_cl->exist("$id")->getStatus();
if (!$test) {
    header('Location: index.php');
} else {
$dompdf = new Dompdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Example</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Roboto", sans-serif;
            margin: 0;
            padding: 0;
            
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            border-color: grey;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            display:flex;
            background-color: black;

            
        }
        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h2 {
            color:white;
            margin-top: 0;
            font-family: "Roboto Condensed", sans-serif;
            font-size: 24px;
        }
        .card-content p {
            margin-bottom: 0;
            font-size: 16px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        

    </style>
</head>


<body>
    <main>
        <div class="card">
            <div class="card-content">
                <h2>Access Card</h2>
                <p>Id : <span>' . $client->ID . '</span></p>
                <p>Name : <span>' . $client->NAME . '</span></p>               
                <p>Phone : <span>' . $client->PHONE_NUMBER . '</span></p>
                <p>Email : <span>' . $client->EMAIL . '</span></p>
            </div>
        </div>
    </main>
</body>
</html>
';


$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();

    }}