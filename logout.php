<?php

session_start();
if (isset($_POST['seller_logout_btn'])) {
    unset($_SESSION['seller_logged']);
    unset($_SESSION['user_id']);
    header('location: login.php');
}
if (isset($_POST['client_logout_btn'])) {
    unset($_SESSION['client_logged']);
    header('location: login.php');
}
if (isset($_POST['admin_logout_btn'])) {
    unset($_SESSION['admin_logged']);
    header('location: login.php');
}
exit();
?>