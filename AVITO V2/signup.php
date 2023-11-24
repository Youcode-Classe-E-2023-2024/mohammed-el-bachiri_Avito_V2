<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<!-- component -->
<!-- This is an example component -->
<div class='bg-white h-screen w-screen flex justify-center items-center'>
    <div class="px-6 py-3 rounded border w-64 flex flex-col justify-between">
        <div class="flex flex-col items-center justify-center mb-4">
            <h2 class="text-2xl font-bold">Sign Up</h2>
        </div>
        <?php
        session_start();
        if (isset($_SESSION['acc_exist']) && $_SESSION['acc_exist']){
            echo "<span class='text-xs text-red-500'><b></b>Account Already exist !</span>";
            unset($_SESSION['acc_exist']);
        }
        if (isset($_SESSION['acc_created']) && $_SESSION['acc_created']) {
            ?>
            <span class='text-sm text-green-500 my-2'><b></b>Account Created Successfully !</span>
            <a href="login.php" class="w-fit bg-green-500 hover:opacity-80 text-white font-bold py-2 px-4 rounded my-2">LOG IN ?</a>

        <?php
        unset($_SESSION['acc_created']);
        exit();
        }
        ?>
        <form action="include/signup_traitment.php" method="POST">
            <!-- username -->
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">First Name</label>
                <input class="border rounded px-3 py-1 mt-2" type="text" required name="fname"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Last Name</label>
                <input class="border rounded px-3 py-1 mt-2" type="text" required name="lname"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Email</label>
                <input class="border rounded px-3 py-1 mt-2" type="email" required name="email"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Password</label>
                <input class="border rounded px-3 py-1 mt-2" type="password" required name="pass"/>
            </div>

            <div class="flex flex-col items-center justify-center my-3">
                <button name="seller_btn" class="my-3 py-1 w-full rounded bg-blue-600 bg-green-400 text-white hover:opacity-80">
                    Register as Seller
                </button>
                <button name="client_btn" class="my-3 py-1 w-full rounded bg-blue-600 bg-orange-400 text-white hover:opacity-80">
                    Register as Client
                </button>
                <p class="text-xs text-gray-500">
                    Already have an Account ?
                    <a href="login.php" class="font-bold text-gray-700">Click here</a>
                    to Log in.
                </p>
            </div>
        </form>
    </div>
</div>
</body>
</html>