<?php
session_start();
require_once 'config.php';
$user_id = $_SESSION['user_id'];

if (isset($_POST['btn'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $photo = $_FILES['photo']['tmp_name'];

    $imageData = file_get_contents($photo);
    $imageData = $connect->real_escape_string($imageData);

    $sql = "INSERT INTO products (title, description, price, photo, user_id) VALUES (?, ?, ?, ?, ?)";

    $stm = $connect->prepare($sql);
    $stm->bind_param('ssisi', $title, $description, $price, $imageData, $user_id);
    $rslt = $stm->execute();
    if (!$rslt) {
        echo 'error: ' . $stm->error;
    } else {
        header('location: seller.php');
    }
}