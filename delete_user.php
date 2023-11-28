<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Deleting Confirmation</title>
</head>
<body>

<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-8 absolute top-72 inset-x-96">
    <p class="mb-4 text-lg">Are you sure you want to delete this User?</p>

    <form action="delete_user_process.php" method="post" class="flex justify-end space-x-4">
        <input name="user_id" type="hidden" value="<?php echo $_POST['id'];?>">
        <button name="yes_btn" type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-all">Yes</button>
        <a href="admin.php" type="button" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-md hover:bg-gray-400 transition-all">No</a>
    </form>
</div>
</body>
</html>
