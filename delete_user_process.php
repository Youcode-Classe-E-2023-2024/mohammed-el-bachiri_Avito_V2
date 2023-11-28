<?php
require_once 'config.php';
session_start();
if (isset($_POST['yes_btn'])) {
    $user_id = $_POST['user_id'];

    $sql_user = "DELETE FROM users WHERE id = $user_id";
    $result_user = mysqli_query($connect, $sql_user);

    $sql_products = "DELETE FROM products WHERE user_id = $user_id";
    $result_products = mysqli_query($connect, $sql_products);

    if ($result_user && $result_products) {
        unset($_SESSION['seller_logged']);
        unset($_SESSION['client_logged']);
        unset($_SESSION['admin_logged']);
        unset($_SESSION['user_id']);
        header('location: admin.php');
    } else {
        echo 'error : ' . mysqli_error($connect);
    }
}
?>
