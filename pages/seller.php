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
<nav class="bg-green-500 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-2xl font-bold">Seller Dashboard</a>
        <div class="flex items-center space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Products</a>
            <a href="#" class="hover:text-gray-300">Orders</a>
            <button class="bg-red-500 text-white px-2 py-1 rounded">Logout</button>
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
            <!-- Replace the following with actual product data -->
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Product 1</h3>
                <p>Description of Product 1.</p>
                <div class="mt-4 flex items-center space-x-2">
                    <button class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                    <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Product 2</h3>
                <p>Description of Product 2.</p>
                <div class="mt-4 flex items-center space-x-2">
                    <button class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                    <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                </div>
            </li>
            <!-- Add more products as needed -->
        </ul>
    </section>

    <!-- Add Product Button -->
    <button class="bg-green-500 text-white px-4 py-2 rounded">Add Product</button>

</div>

</body>
</html>
