<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md w-96">
    <h2 class="text-2xl font-semibold mb-4">Add Product</h2>

    <form action="add_product_process.php" method="post" enctype="multipart/form-data">
        <label class="block mb-2 font-bold" for="productName">Product Name:</label>
        <input class="w-full p-2 border rounded" type="text" id="productName" name="title" required>

        <label class="block mb-2 font-bold" for="productDescription">Product Description:</label>
        <input class="w-full p-2 border rounded" type="text" id="productDescription" name="description" required>

        <label class="block mb-2 font-bold" for="productPrice">Product Price:</label>
        <input class="w-full p-2 border rounded" type="number" id="productPrice" name="price" step="0.01" required>

        <label class="block mb-2 font-bold" for="productPhoto">Product Photo:</label>

        <input class="w-full p-2 border rounded mb-4" type="file" id="productPhoto" name="photo" accept="image/*" required> <!-- accept all types images -->
        <img id="photoPreview" class="max-w-full mb-4" src="#" alt="Product Photo Preview">

        <button name="btn" class="bg-green-500 text-white p-2 rounded hover:bg-green-600" type="submit">Add Product</button>
    </form>
</div>

<script>
    // Preview the selected photo before uploading
    document.getElementById('productPhoto').addEventListener('change', function (event) {
        const preview = document.getElementById('photoPreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    });
</script>
</body>
</html>
