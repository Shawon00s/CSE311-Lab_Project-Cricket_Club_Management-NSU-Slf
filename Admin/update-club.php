<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $club_id = $_GET['updateid'];

    $sql = "SELECT club.*, 
                   GROUP_CONCAT(DISTINCT club_phone_number.phone_number SEPARATOR ', ') AS phone_numbers,
                   GROUP_CONCAT(DISTINCT club_email.email SEPARATOR ', ') AS emails
            FROM club
            LEFT JOIN club_phone_number ON club.club_id = club_phone_number.club_id
            LEFT JOIN club_email ON club.club_id = club_email.club_id
            WHERE club.club_id = $club_id
            GROUP BY club.club_id";
    $result = mysqli_query($conn, $sql);
    $club_data = mysqli_fetch_array($result);

    $club_name = $club_data['club_name'];
    $location = $club_data['location'];
    $history = $club_data['history'];
    $phone_numbers = $club_data['phone_numbers'];
    $emails = $club_data['emails'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $club_name = $_POST['club_name'];
    $location = $_POST['location'];
    $history = $_POST['history'];
    $new_phone_numbers = $_POST['phone_numbers'];
    $new_emails = $_POST['emails'];

    $update_sql = "UPDATE club 
                   SET club_name = '$club_name', location = '$location', history = '$history'
                   WHERE club_id = $club_id";

    if (mysqli_query($conn, $update_sql)) {
        $delete_phone_sql = "DELETE FROM club_phone_number WHERE club_id = $club_id";
        mysqli_query($conn, $delete_phone_sql);

        $phone_numbers_array = explode(',', $new_phone_numbers);
        foreach ($phone_numbers_array as $phone) {
            $phone = trim($phone);
            $insert_phone_sql = "INSERT INTO club_phone_number (club_id, phone_number) VALUES ($club_id, '$phone')";
            mysqli_query($conn, $insert_phone_sql);
        }

        $delete_email_sql = "DELETE FROM club_email WHERE club_id = $club_id";
        mysqli_query($conn, $delete_email_sql);

        $emails_array = explode(',', $new_emails);
        foreach ($emails_array as $email) {
            $email = trim($email);
            $insert_email_sql = "INSERT INTO club_email (club_id, email) VALUES ($club_id, '$email')";
            mysqli_query($conn, $insert_email_sql);
        }

        header('Location: admin-display-club.php');
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<?php include('partials/header-dark.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Club</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Update Club</h1>

    <form class="max-w-2xl mx-auto pt-6" action="update-club.php?updateid=<?php echo $club_id; ?>" method="POST">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="club_name" name="club_name" value="<?php echo $club_name; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                required />
            <label for="club_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Club
                Name</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="location" name="location" value="<?php echo $location; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                required />
            <label for="location"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Location</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <textarea id="history" name="history"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                required><?php echo $history; ?></textarea>
            <label for="history"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">History</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="phone_numbers" name="phone_numbers" value="<?php echo $phone_numbers; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                required />
            <label for="phone_numbers"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Phone
                Numbers (comma-separated)</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="emails" name="emails" value="<?php echo $emails; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                required />
            <label for="emails"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Emails
                (comma-separated)</label>
        </div>
        <button type="submit" class="btn btn-outline btn-success">Update Club</button>
    </form>

</body>

</html>