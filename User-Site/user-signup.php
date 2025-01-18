<?php
include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($gender) || empty($number) || empty($email) || empty($password)) {
        echo '<script>alert("All fields are required! Please fill out the form.");</script>';
    } else {
        $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
        $emailResult = mysqli_query($conn, $checkEmailQuery);

        if (mysqli_num_rows($emailResult) > 0) {
            echo '<script>alert("Email already exists! Please use a different email.");</script>';
        } else {
            $sql = "INSERT INTO user (name, gender, number, email, password) 
                    VALUES ('$name', '$gender', '$number', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo '<script>
                alert("User registered successfully!");
                </script>';
                header('Location: login.php');
                exit;
            } else {
                echo '<script>alert("Error: Unable to register user. Please try again.");</script>';
            }
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">User Signup</h1>
        <form method="POST" action="">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select id="gender" name="gender" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" id="number" name="number" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
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
                Signup
            </button>
        </form>
    </div>
</body>

</html>