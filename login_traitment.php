<?php
require_once 'config.php';

session_start();
unset($_SESSION['acc_exist']);
unset($_SESSION['acc_created']);


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = strip_tags($_POST['pass']); // Remove HTML, Script, PHP tags from password input

    if ($email == 'admin@admin' && $pass == 'admin') {
        header('location: admin.php');
        $_SESSION['admin_logged'] = true;
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = ?";
    $stm = $connect->prepare($sql);
    $stm->bind_param('s', $email);
    $rslt = $stm->execute();
    if ($rslt) {
        $result = $stm->get_result();

        if ($result->num_rows == 1) {
            $arr = $result->fetch_assoc();

            if ($arr['role'] == 'seller' && $arr['password'] == $pass) {
                header('location: seller.php');
                $_SESSION['seller_logged'] = true;
                $_SESSION['user_id'] = $arr['id'];
                exit();
            } elseif ($arr['role'] == 'client' && $arr['password'] == $pass) {
                header('location: client.php');
                $_SESSION['client_logged'] = true;
                $_SESSION['user_id'] = $arr['id'];
                exit();
            } else {
                header('location: login.php');
                $_SESSION['invalid_info'] = true;
            }

        } else {
            header('location: login.php');
            $_SESSION['acc_not_exist'] = true;
        }
    } else {
        header('location: login.php');
    }
}
?>
