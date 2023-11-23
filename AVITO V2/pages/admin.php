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

<div class="flex">
    <div class="w-[25%] h-screen from-sky-950 text-white bg-gradient-to-b bg-sky-800">
        <img src="img/logo.png" alt="" class="m-10 h-10">
        <div class="opacity-80 bg-none" id="l">
            <p class="w-full p-4 pl-10 my-2  text-2xl hover:cursor-pointer">Dashboard</p>
            <p class="w-full p-4 pl-10 my-2 text-2xl hover:cursor-pointer">Products</p>
            <p class="w-full p-4 pl-10 my-2 text-2xl hover:cursor-pointer">Sellers</p>
        </div>
        <form action="log_out.php" method="post">
        <button name="btn" class="text-start hover:opacity-70 w-full p-4 pl-10 my-2 text-red-500 font-bold text-xl">Log Out</button>
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
                        <p class="text-xl">2,298</p>
                        <p class="text-lg">Number of Users</p>
                    </section>
                </section>
                <section class="mb-8 flex bg-white p-5 w-[30%] shadow-sm rounded-lg justify-between">
                    <img src="img/profile.png" alt="" class="rounded-full h-16">
                    <section class="w-[70%]">
                        <p class="text-xl">2,298</p>
                        <p class="text-lg">New Users</p>
                    </section>
                </section>
                <section class="mb-8 flex bg-white p-5 w-[30%] shadow-sm rounded-lg justify-between">
                    <img src="img/products.png" alt="" class="rounded-full h-16">
                    <section class="w-[70%]">
                        <p class="text-xl">2,298</p>
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
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Role</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Replace the following with actual user data -->
                    <tr>
                        <td class="p-4">John Doe</td>
                        <td class="p-4">john.doe@example.com</td>
                        <td class="p-4">Seller</td>
                        <td class="p-4">Active</td>
                        <td class="p-4 flex justify-center ">
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4">Jane Smith</td>
                        <td class="p-4">jane.smith@example.com</td>
                        <td class="p-4">Client</td>
                        <td class="p-4">Inactive</td>
                        <td class="p-4 flex justify-center ">
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more users as needed -->
                    </tbody>
                </table>
            </section>

        </div>

        <div id="div2">sillers</div>

        <div id="div3">dashboard</div>
    </div>
</div>


<script>
    const p = document.querySelectorAll('div#l p');
    const d1 = document.querySelector('#div1');
    const d2 = document.querySelector('#div2');
    const d3 = document.querySelector('#div3');

    const div = [d1, d2, d3];

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

                case ele = p[2]:
                    hideDivs();
                    div[2].style.display = 'block';
                    break;
            }
        });
    })
</script>

</body>
</html>
