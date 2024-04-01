<?php
require_once '../../utilities/autoloader.php';
if(isset($_POST['name']) && isset($_POST['duration']) && isset($_POST['price'])){
    $name=$_POST['name'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
    $data=[
        'name'=>$name,
        'duration'=> $duration,
        'price'=>$price,
    ];
    $off=new Offre();
    $off->insert($data);
    header("Location: ../majforfait.php");
    exit;
    }

else{
    echo "Error: information not provided.";
}
