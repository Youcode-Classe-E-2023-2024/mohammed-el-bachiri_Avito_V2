<?php
include_once 'config.php';
session_start();
if (!$_SESSION['client_logged'] && !isset($_SESSION['client_logged'])) {
    header('location: login.php');
    exit();
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$rslt = $connect->query($sql);
foreach ($rslt as $value) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <div class="text-center mb-4">
            <label for="profile-picture" class="cursor-pointer">
                <img id="preview" src="<?= $value['profile_pc_path'];?>" alt="Profile Picture" class="rounded-full w-20 h-20 mx-auto mb-2">
            </label>
            <h2 class="text-xl font-bold"><?= $value['first_name'] . ' ' . $value['last_name']; ?></h2>
            <p class="text-gray-500">Client</p>
        </div>

        <div class="mb-4">
            <form action="edit_profile_process.php" method="post" enctype="multipart/form-data">
            <h3 class="text-lg font-semibold mb-2">Profile Information</h3>

                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">First Name</label>
                    <input type="text" id="username" name="fname" value="<?= $value['first_name']; ?>" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Last Name</label>
                    <input type="text" id="email" name="lname" value="<?= $value['last_name']; ?>" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <input type="file" id="profile-picture" name="photo" class="hidden" accept="image/*" onchange="previewImage()">

                <button name="btn" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save Changes</button>
            </form>

        </div>
    </div>
</div>

<script>
    function previewImage() {
        const fileInput = document.getElementById('profile-picture');
        const preview = document.getElementById('preview');

        const file = fileInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onloadend = () => {
                preview.src = reader.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>

</body>
</html>
<?php } ?>