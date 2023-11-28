<?php
require_once 'config.php';

if (isset($_POST['save_btn'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET title = ?, description = ?, price = ? WHERE id = ?;";
    $prepare = $connect->prepare($sql);
    $prepare->bind_param('ssii', $title,$description, $price, $id);
    $result = $prepare->execute();

    if ($result) {
        header('location: seller.php');
    }

}
?>