<?php
session_start();
include '../config/config.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

function registerUser($connect, $fname, $lname, $email, $pass, $role) {
    $sql_select = "SELECT email FROM users WHERE email = ?";
    $stmt = $connect->prepare($sql_select);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $arr = $stmt->get_result();

    if ($arr->num_rows != 0) {
        header('location: ../signup.php');
        $_SESSION['acc_exist'] = true;
    } else {
        $sql_insert = "INSERT INTO users (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connect->prepare($sql_insert);
        $stmt->bind_param('sssss', $fname, $lname, $email, $pass, $role);
        $result = $stmt->execute();
        if ($result) {
            header('location: ../signup.php');
            $_SESSION['acc_created'] = true;
        }
    }
}

if (isset($_POST['seller_btn'])) {
    registerUser($connect,$fname,$lname,$email,$pass, 'seller');
}
if (isset($_POST['client_btn'])) {
    registerUser($connect,$fname,$lname,$email,$pass, 'client');
}

exit();
?>