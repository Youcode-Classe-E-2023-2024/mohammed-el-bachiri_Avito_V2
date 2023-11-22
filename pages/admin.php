<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo or Brand Name -->
        <div>
            <a href="#" class="text-2xl font-bold">Your Project</a>
        </div>

        <!-- Navbar Links -->
        <div class="flex space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Products</a>
            <a href="#" class="hover:text-gray-300">Contact</a>

            <!-- Add more links based on your requirements -->

            <!-- User Authentication Section -->
            <div class="flex items-center space-x-4">
                <!-- Replace these links with actual authentication logic -->
                <a href="#" class="hover:text-gray-300">Login</a>
                <a href="#" class="hover:text-gray-300">Sign Up</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mx-auto p-8">

    <!-- Super Admin Content -->
    <h2 class="text-3xl font-bold mb-4">All Sellers and Clients</h2>

    <!-- List of Sellers -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-2">Sellers</h3>
        <!-- Replace the following with actual seller data -->
        <ul>
            <li>Seller 1 <button class="bg-red-500 text-white px-2 py-1">Delete</button></li>
            <li>Seller 2 <button class="bg-red-500 text-white px-2 py-1">Delete</button></li>
            <!-- Add more sellers as needed -->
        </ul>
    </div>

    <!-- List of Clients -->
    <div>
        <h3 class="text-xl font-bold mb-2">Clients</h3>
        <!-- Replace the following with actual client data -->
        <ul>
            <li>Client 1 <button class="bg-red-500 text-white px-2 py-1">Delete</button></li>
            <li>Client 2 <button class="bg-red-500 text-white px-2 py-1">Delete</button></li>
            <!-- Add more clients as needed -->
        </ul>
    </div>

</div>

</body>
</html>
