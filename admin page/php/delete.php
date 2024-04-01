<?php
require_once '../../utilities/autoloader.php';


if(isset($_POST['id'])) {
    
    $id=(int)$_POST['id'];
    $off=new Offre();
    $off->delete($id);
    header("Location: ../majforfait.php");
    exit;
} else {
    echo "Error: ID not provided.";
}

