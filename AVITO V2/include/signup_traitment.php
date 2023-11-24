<?php
session_start();
include '../config/config.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

if (isset($_POST['seller_btn'])) {

    $sql_select = "SELECT email FROM users WHERE email = ?";
    $stmt1 = $connect->prepare($sql_select);
    $stmt1->bind_param('s', $email);
    $result1 = $stmt1->execute();
    $arr = $stmt1->get_result();

    if ($arr->num_rows != 0) {
        header('location: ../signup.php');
        $_SESSION['acc_exist'] = true;
    } else {
        echo 'error : ' . mysqli_error($connect);
    }
}

exit();
?>