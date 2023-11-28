<?php
session_start();
require_once 'config.php';

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php'); // Redirect to login page or handle accordingly
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['btn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    // File Upload
    $uploadDir = 'uploads/';
    $originalFileName = $_FILES['photo']['name'];
    $uploadFile = $uploadDir . basename($originalFileName);

    // Validate and move uploaded file
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
        // Update database
        $sql = "UPDATE users SET first_name = ?, last_name = ?, profile_pc_path = ? WHERE id = ?";
        $prepare = $connect->prepare($sql);
        $prepare->bind_param('sssi', $fname, $lname, $uploadFile, $user_id);
        $result = $prepare->execute();

        if ($result) {
            header('location: client.php');
            exit();
        } else {
            echo "Error updating user profile. Please try again.";
        }
    } else {
        echo "Error uploading file. Please try again.";
    }
}
?>
