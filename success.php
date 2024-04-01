<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body{
            text-align:center;
            justify-content:center;
            align-items:center;
        }
        </style>
</head>
<body>
    <h1>TRANSACTION SUCCEEDED</h1>
    <h1>Thank you for payment... </h1>
    <?php
    require 'Classes/Personne/Remote.php';
    require 'Classes/connexionBD.php';
    require 'Classes/Response.php';
    $RemoteClass=new Remote('offre_client');
    $Response=$RemoteClass->insert(['ID_CLIENT'=>$_SESSION['user']['id'],'ID_OFFRE'=>$_SESSION['offreID']]);
    ?>
   <a class="btn btn-warning" href="services.php">Retour</a>
</body>
</html>