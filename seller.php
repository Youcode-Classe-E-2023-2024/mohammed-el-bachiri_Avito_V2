<?php
include_once("config.php");
session_start();
if (!$_SESSION['seller_logged'] && !isset($_SESSION['seller_logged'])) {
    header('location: login.php');
    exit();
}

$current_user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM products WHERE user_id = $current_user_id";
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-green-500 p-4 text-white bg-gradient-to-l from-indigo-500">
    <div class="container mx-auto flex justify-between items-center ">
        <img src="img/logo.png" alt="" class="h-8">
        <?php
        $sql_user = "SELECT * FROM users WHERE id = $current_user_id";
        $rslt = mysqli_query($connect, $sql_user);
        $arr = $rslt->fetch_assoc();
        ?>
        <a href="#" class="text-xl font-bold opacity-90">Welcome Back MR <span class="text-green-300 text-2xl opacity-100"><?= $arr['first_name'];?></span></a>
        <img src="<?= $arr['profile_pc_path'] ?>" class="h-12 w-12 rounded-full cursor-pointer hover:cursor-pointer hover:opacity-80" id="profile_btn" alt="">
            <div id="menu" class="hidden absolute top-20 right-4 bg-gray-600 p-3 rounded flex-col">
                <a href="profile.php" class="hover:text-gray-300">My Profile</a>
                <a href="add_product.php" class="hover:text-gray-300 my-4">Add Product</a>
                <form action="logout.php" method="post" enctype="multipart/form-data">
                    <button name="seller_logout_btn" class="bg-red-500 px-2 py-1 rounded hover:opacity-80 font-bold cursor-pointer">Log out</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Seller Content -->
<div class="container mx-auto p-8">

    <!-- Product Management Section -->
    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Your Products</h2>

        <!-- Product List -->
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php
            foreach ($result as $value) {
                ?>
                <li class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <img src="<?= $value['photo_path']; ?>" class="mb-4" alt="">
                    <h3 class="text-xl font-bold mb-2"><?= $value['title']; ?></h3>
                    <p> <?= $value['description']; ?> </p>
                    <div class="mt-4 flex items-center space-x-2 justify-between">
                        <p class="bg-gradient-to-t bg-green-400 from-green-700  rounded shadow-xl text-white p-2"><?= $value['price'] ?> DH</p>
                        <form action="delete_product_confirmation.php" method="post">
                            <button class="bg-red-500 text-white py-2 px-4 rounded hover:opacity-80 transition-all shadow-xl">Delete</button>
                            <input name="product_id" type="hidden" value="<?= $value['id']; ?>">
                        </form>
                        <form action="edit_product.php" method="post">
                            <button name="edit" class="bg-blue-500 text-white px-4 py-2 rounded hover:opacity-80 transition-all shadow-xl">Edit</button>
                            <input name="product_id" type="hidden" value="<?= $value['id']; ?>">
                        </form>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </section>

    <a href="add_product.php" class="bg-green-500 text-white px-4 py-2 rounded">Add Product</a>

</div>

<script src="script.js"></script>
</body>
</html>
