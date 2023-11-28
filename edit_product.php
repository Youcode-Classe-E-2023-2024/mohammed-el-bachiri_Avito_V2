<?php
require_once 'config.php';

if (isset($_POST['edit'])) {
    $product_id = $_POST['product_id'];

    $sql = "SELECT * FROM products WHERE id = $product_id";
    $rslt = mysqli_query($connect, $sql);
    $value = $rslt->fetch_assoc();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Product</title>
</head>
<body>
<div class="max-w-md mx-auto mt-8">
    <h1 class="text-xl font-bold mb-4 text-center mb-[20px] text-blue-500 mb-10">Edit the Announcement with the ID: <?= $value['id']; ?></h1>


    <form action="edit_product_process.php" method="post" class="bg-white p-6 rounded shadow-md" >
        <input type="hidden" name="id" value="<?= $value['id']; ?>">
        <img src="<?= $value['photo_path']; ?>" class="mb-4" alt="">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title:</label>
            <input name="title" type="text" value="<?= $value["title"];?>" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold mb-2">Description:</label>
            <input name="description" type="text" value="<?= $value["description"];?>" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" >
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">price:</label>
            <input name="price" type="text" value="<?= $value["price"];?>" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="text-center">
            <button name="save_btn" class="hover:opacity-80 font-bold transition-all bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">SAVE</button>
        </div>

    </form>
</div>

</body>
</html>
<?php } ?>