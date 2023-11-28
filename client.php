<?php
include_once 'config.php';
session_start();
if (!$_SESSION['client_logged'] && !isset($_SESSION['client_logged'])) {
    header('location: login.php');
    exit();
}

$current_user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-sky-500 bg-gradient-to-r from-indigo-500 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <?php
        $sql1 = "SELECT * FROM users where id = $current_user_id";
        $rslt = mysqli_query($connect, $sql1);
        foreach ($rslt as $value) {

        ?>
        <img src="img/logo.png" alt="" class="h-8">
        <div class="flex items-center space-x-4">
            <p class="text-sm text-gray-300">Welcome Back <span class="text-black font-bold text-lg"><?= $value['first_name'];?></span></p>
        <img src="<?= $value['profile_pc_path'];?>" class="h-12 w-12 rounded-full hover:cursor-pointer hover:opacity-80" id="profile_btn" alt="">
        <div id="menu" class="hidden absolute top-20 right-4 bg-gray-600 p-3 rounded">
            <a href="profile.php" class="my-2 hover:opacity-70">Profile</a>
            <form action="logout.php" method="post">
                <button name="client_logout_btn" class="text-red-500 rounded hover:opacity-80 font-bold cursor-pointer">Log out</button>
            </form>
        </div>
            <?php } ?>
        </div>
    </div>
</nav>


<!-- Client Content -->
<div class="container mx-auto p-8">

    <!-- Available Products Section -->
    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Available Products</h2>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($result as $value) { ?>
                <li class="bg-white p-4 rounded shadow">
                    <img src="<?= $value['photo_path']; ?>" class="mb-4 w-full h-32 object-cover" alt="">
                    <h3 class="text-xl font-bold mb-2"><?= $value['title']; ?></h3>
                    <p class="text-gray-600 mb-2"><?= $value['description']; ?></p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-500 font-bold"><?= $value['price'] ?> DH</span>
                        <button class="bg-green-500 text-white px-2 py-1 rounded hover:opacity-70 transition-all">BUY</button>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </section>
</div>

<script>
    const menu = document.querySelector('#menu');
    const btn = document.querySelector('#profile_btn');
    btn.addEventListener('click', ()=>{
        if (menu.style.display === 'none'){
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    });

</script>

</body>
</html>
