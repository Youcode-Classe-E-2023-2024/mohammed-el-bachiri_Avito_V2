<?php
session_start();
require_once 'config.php';
$user_id = $_SESSION['user_id'];

if (isset($_POST['btn'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $uploadDir = 'uploads/';
    $originalFileName = $_FILES['photo']['name'];
    $uploadFile = $uploadDir . basename($originalFileName);

    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile);

    $sql = "INSERT INTO products (title, description, price, photo_path, user_id) VALUES (?, ?, ?, ?, ?)";

    $stm = $connect->prepare($sql);
    $stm->bind_param('ssisi', $title, $description, $price, $uploadFile, $user_id);
    $rslt = $stm->execute();

    if (!$rslt) {
        echo 'error: ' . $stm->error;
    } else {
        header('location: seller.php');
    }
}
?>
