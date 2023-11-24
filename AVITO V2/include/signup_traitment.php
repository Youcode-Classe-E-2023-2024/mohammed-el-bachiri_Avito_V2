<?php
include '../config/config.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
if (isset($_POST['seller_btn'])) {
    $sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, 'seller')";
    $stmt =  $connect->prepare($sql);
    $stmt->bind_param('ssss', $fname, $lname, $email, $pass);
    $result = $stmt->execute();
    if ($result == true) {
        header('location: ../login.php');
    } else {
        echo 'error : ' . mysqli_error($connect);
    }
}

