<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../index.php');
    exit;
} else {
    $i = 1;
    foreach ($_FILES as $file) {
        $file_name = "emploi" . $i . ".png";
        move_uploaded_file($file['tmp_name'], "../uploads/" . $file_name);
        $i++;
    }
    echo "<script>alert('Timetables added successfully')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
}