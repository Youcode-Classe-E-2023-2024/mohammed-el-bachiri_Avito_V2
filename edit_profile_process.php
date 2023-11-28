<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['btn']) && isset($_FILES['photo']['name'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $uploadDir = 'uploads/';
    $originalFileName = $_FILES['photo']['name'];
    $uploadFile = $uploadDir . basename($originalFileName);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
        $sql = "UPDATE users SET first_name = ?, last_name = ?, profile_pc_path = ? WHERE id = ?";
        $prepare = $connect->prepare($sql);
        $prepare->bind_param('sssi', $fname, $lname, $uploadFile, $user_id);
        $result = $prepare->execute();

        if ($result) {
            header('location: client.php');
            exit();
        } else {
            echo "error : " . mysqli_error($connect);
        }
    } else {
        header('location: client.php');
    }
}
?>
