<?php
include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo '<script>alert("Both email and password are required.");</script>';
    } else {
        $adminSql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $adminResult = mysqli_query($conn, $adminSql);

        if (mysqli_num_rows($adminResult) == 1) {
            echo '<script>alert("Admin logged in successfully!");</script>';
            header('Location: ../Admin/main.php');
            exit;
        }

        $userSql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $userResult = mysqli_query($conn, $userSql);

        if (mysqli_num_rows($userResult) == 1) {
            echo '<script>alert("User logged in successfully!");</script>';
            header('Location: landing-page.php');
            exit;
        }

        echo '<script>alert("Invalid email or password. Please try again.");</script>';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
        <form method="POST" action="">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700">
                Login
            </button>
        </form>
    </div>
</body>

</html>