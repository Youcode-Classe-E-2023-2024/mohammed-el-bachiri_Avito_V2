<?php
require_once 'config.php';

if (isset($_POST['yes_btn'])) {
    $product_id = $_POST['product_id'];

    $sql = "DELETE FROM products WHERE id = $product_id";
    $rslt = mysqli_query($connect, $sql);

    if ($rslt) {
        header('location: seller.php');
    } else {
        echo 'error : ' . mysqli_error($connect);
    }
}

?>
