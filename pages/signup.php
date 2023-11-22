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
    <div class="px-6 py-3 rounded border w-64">
        <div class="flex flex-col items-center justify-center mb-4">

            <h2 class="text-2xl font-bold">Sign Up</h2>
        </div>
        <form action="#" method="POST">
            <!-- username -->
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">First Name</label>
                <input class="border rounded px-3 py-1 mt-2" type="text"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Last Name</label>
                <input class="border rounded px-3 py-1 mt-2" type="text"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Email</label>
                <input class="border rounded px-3 py-1 mt-2" type="email"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Password</label>
                <input class="border rounded px-3 py-1 mt-2" type="password"/>
            </div>

            <div class="flex flex-col items-center justify-center my-3">
                <button class="my-3 py-1 w-full rounded bg-blue-600 text-blue-200">
                    Register
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