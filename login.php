<?php
session_start();
if (isset($_SESSION['seller_logged']) && $_SESSION['seller_logged']) {
    header('location: seller.php');
    exit();
} elseif (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged']) {
    header('location: admin.php');
    exit();
} elseif (isset($_SESSION['client_logged']) && $_SESSION['client_logged']) {
    header('location: client.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOG IN</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<!-- component -->
<!-- This is an example component -->
<div class='bg-white h-screen w-screen flex justify-center items-center'>
    <div class="px-6 py-3 rounded border w-64">
        <div class="flex flex-col items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            <h2 class="text-2xl font-bold">Login</h2>
        </div>
        <form action="login_traitment.php" method="POST">
            <div class="text-xs text-red-400 flex justify-between items-center">
            <?php
            if (isset($_SESSION['invalid_info']) && $_SESSION['invalid_info']) { ?>
                <span><b>Error: </b>The Provided Information was Wrong !</span>
            <?php
                unset($_SESSION['invalid_info']);
            } elseif (isset($_SESSION['acc_not_exist']) && $_SESSION['acc_not_exist']) { ?>
                <span><b>Error: </b>Account does not Exist !</span>

            <?php
                unset($_SESSION['acc_not_exist']);
            }
            ?>

            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Email</label>
                <input class="border rounded px-3 py-1 mt-2" type="email" required name="email" />
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Password</label>
                <input class="border rounded px-3 py-1 mt-2" type="password" required name="pass" />
            </div>
            <div class="flex flex-col items-center justify-center my-3">
                <button name="submit" class="my-3 py-1 w-full rounded bg-blue-600 text-white transition-all hover:opacity-80">
                    Submit
                </button>
                <p class="text-xs text-gray-500">
                    Don't have Account ?
                    <a href="signup.php" class="font-bold text-gray-700 transition-all hover:opacity-80">Click here</a>
                    to Sign up.
                </p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
