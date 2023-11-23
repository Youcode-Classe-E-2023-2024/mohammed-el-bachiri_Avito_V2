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
        <img src="img/logo.png" alt="" class="h-8">
        <a href="#" class="text-2xl font-bold">Client Dashboard</a>
        <div class="flex items-center space-x-4">
            <a href="#" class="hover:text-gray-300">Products</a>
            <button class=" bg-red-500 px-2 py-1 rounded hover:opacity-80 font-bold cursor-pointer">Log out</button>
        </div>
    </div>
</nav>


<!-- Client Content -->
<div class="container mx-auto p-8">

    <!-- Available Products Section -->
    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Available Products</h2>

        <!-- Product List -->
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Replace the following with actual product data -->
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Product A</h3>
                <p>Description of Product A.</p>
                <div class="mt-4 flex items-center space-x-2">
                    <button class="bg-green-500 text-white px-2 py-1 rounded hover:opacity-70 transition-all">Buy</button>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Product B</h3>
                <p>Description of Product B.</p>
                <div class="mt-4 flex items-center space-x-2">
                    <button class="bg-green-500 text-white px-2 py-1 rounded hover:opacity-70 transition-all">Buy</button>
                </div>
            </li>
            <!-- Add more products as needed -->
        </ul>
    </section>

    <!-- Client's Order History Section -->
    <section>
        <h2 class="text-3xl font-bold mb-4">Your Orders</h2>

        <!-- Order List (to be populated based on user's order history) -->
        <ul>
            <li class="bg-white p-4 rounded shadow mb-4">
                <h3 class="text-xl font-bold mb-2">Order #1234</h3>
                <p>Product A</p>
                <p>Total: $10.00</p>
            </li>
            <!-- Add more orders as needed -->
        </ul>
    </section>

</div>

</body>
</html>
