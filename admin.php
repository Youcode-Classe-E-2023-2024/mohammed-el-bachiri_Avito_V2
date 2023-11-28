<?php
session_start();
require_once 'config.php';
if (!$_SESSION['admin_logged'] && !isset($_SESSION['admin_logged'])) {
    header('location: login.php');
    exit();
}
$sql_products = "SELECT * FROM products";
$sql_clients =  "SELECT * FROM users WHERE role = 'client'";
$sql_sellers =  "SELECT * FROM users WHERE role = 'seller'";
$sql_users = "SELECT * FROM users";

$rslt_sellers = mysqli_query($connect, $sql_sellers);
$rslt_clients = mysqli_query($connect, $sql_clients);
$rslt_products = mysqli_query($connect, $sql_products);
$rslt_users = mysqli_query($connect, $sql_users);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Navbar -->

<div class="flex h-screen">
    <div class="w-[25%] h-screen from-sky-950 text-white bg-gradient-to-b bg-sky-800">
        <img src="img/logo.png" alt="" class="m-10 h-10">
        <div class="opacity-80 bg-none" id="l">
            <p class="w-full p-4 pl-10 my-2  text-2xl hover:cursor-pointer">Dashboard</p>
            <p class="w-full p-4 pl-10 my-2 text-2xl hover:cursor-pointer">Products</p>
        </div>
        <form action="logout.php" method="post">
        <button name="admin_logout_btn" class="text-start hover:opacity-70 w-full p-4 pl-10 my-2 text-red-500 font-bold text-xl">Log Out</button>
        </form>
    </div>

    <div class="w-full">

        <div class="container mx-auto p-8" id="div1">
            <!-- Statistics Section -->
            <h2 class="text-3xl font-bold mb-4">Statistics</h2>
            <section class="flex justify-between">
                <section class="mb-8 flex bg-white p-5 w-[30%] shadow-sm rounded-lg justify-between">
                    <img src="img/users.png" alt="" class="rounded-full h-16">
                    <section class="w-[70%]">
                        <p class="text-xl"><?= mysqli_num_rows($rslt_clients);?></p>
                        <p class="text-lg">Clients</p>
                    </section>
                </section>
                <section class="mb-8 flex bg-white p-5 w-[30%] shadow-sm rounded-lg justify-between">
                    <img src="img/profile.png" alt="" class="rounded-full h-16">
                    <section class="w-[70%]">
                        <p class="text-xl"><?= mysqli_num_rows($rslt_sellers)?></p>
                        <p class="text-lg">Sellers</p>
                    </section>
                </section>
                <section class="mb-8 flex bg-white p-5 w-[30%] shadow-sm rounded-lg justify-between">
                    <img src="img/products.png" alt="" class="rounded-full h-16">
                    <section class="w-[70%]">
                        <p class="text-xl"><?= mysqli_num_rows($rslt_products); ?></p>
                        <p class="text-lg">Available Products</p>
                    </section>
                </section>
            </section>


            <!-- User List Section -->
            <section class="bg-white shadow-sm">
                <!-- Table of Users -->
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4 text-left">Profile</th>
                        <th class="p-4 text-left">Full Name</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Role</th>
                        <th class="p-4 text-left text-center">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rslt_users as $vl_user) { ?>
                    <tr>
                        <td class="p-4">
                            <img src="<?= $vl_user['profile_pc_path']; ?>" alt="" class="h-8 w-8 rounded-full">
                        </td>
                        <td class="p-4"><?php echo $vl_user['first_name'] . ' ' . $vl_user['last_name']; ?></td>
                        <td class="p-4"><?= $vl_user['email']; ?></td>
                        <td class="p-4"><?= $vl_user['role']; ?></td>
                        <td class="p-4 flex justify-center ">
                            <form action="delete_user.php" method="post">
                                <button class="bg-red-500 text-white py-2 px-4 rounded hover:opacity-80 transition-all shadow-xl">Delete</button>
                                <input name="id" type="hidden" value="<?= $vl_user['id']; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </section>

        </div>

        <div id="div2" class="m-10">
            <div class=" flex justify-end">
                <a href="add_product.php" class="bg-green-500 text-white px-4 py-2 rounded mb-4 hover:opacity-80">Add Product</a>
            </div>
            <section class="bg-white shadow-sm">
                <!-- Table of Users -->
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4 text-left">Photo</th>
                        <th class="p-4 text-left">Seller Name</th>
                        <th class="p-4 text-left">Title</th>
                        <th class="p-4 text-left">Description</th>
                        <th class="p-4 text-left">price</th>
                        <th class="p-4 text-left text-center">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rslt_products as $product) { ?>
                        <tr>
                            <td class="p-4">
                                <img src="<?= $product['photo_path']; ?>" alt="" class="h-20 w-20 rounded-xl">
                            </td>
                            <td>hey</td>
                            <td class="p-4"><?= $product['title']; ?></td>
                            <td class="p-4"><?= $product['description']; ?></td>
                            <td class="p-4"><?= $product['price']; ?></td>
                            <td class="p-4 h-full flex justify-around mt-4">
                                <form action="delete_product_confirmation.php" method="post">
                                    <button class="bg-red-500 text-white py-2 px-4 rounded hover:opacity-80 transition-all shadow-xl">Delete</button>
                                    <input name="product_id" type="hidden" value="<?= $product['id']; ?>">
                                </form>
                                <form action="edit_product.php" method="post">
                                    <button name="edit" class="bg-blue-500 text-white px-4 py-2 rounded hover:opacity-80 transition-all shadow-xl">Edit</button>
                                    <input name="product_id" type="hidden" value="<?= $product['id']; ?>">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </section>

        </div>
    </div>
</div>


<script>
    const p = document.querySelectorAll('div#l p');
    const d1 = document.querySelector('#div1');
    const d2 = document.querySelector('#div2');

    const div = [d1, d2];

    function lowerOpacity() {
        p.forEach((element)=>{
            element.style.opacity = '.7';
            element.style.background = 'none';
        });
    }
    lowerOpacity();

    function hideDivs() {
        div.forEach((element) => {
            element.style.display = 'none';
        });
    }
    hideDivs();

    div[0].style.display = 'block';
    p[0].style.backgroundColor = 'rgb(8 47 73)';
    p[0].style.opacity = '1';

    p.forEach((ele)=>{
        ele.addEventListener('click', () => {
            lowerOpacity();
            ele.style.opacity = '1';
            ele.style.backgroundColor = 'rgb(8 47 73)';

            switch (ele) {
                case ele = p[0]:
                    hideDivs();
                    div[0].style.display = 'block';
                    break;

                case ele = p[1]:
                    hideDivs();
                    div[1].style.display = 'block';
                    break;
            }
        });
    })
</script>

</body>
</html>