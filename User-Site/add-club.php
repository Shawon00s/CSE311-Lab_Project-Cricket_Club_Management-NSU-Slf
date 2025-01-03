<?php
include '../connect.php';

$num_emails = isset($_POST['num_emails']) ? (int) $_POST['num_emails'] : 1;
$num_phones = isset($_POST['num_phones']) ? (int) $_POST['num_phones'] : 1;

if (isset($_POST['add_email'])) {
    $num_emails++;
}

if (isset($_POST['add_phone'])) {
    $num_phones++;
}

if (isset($_POST['submit'])) {
    $club_name = $_POST['club_name'] ?? '';
    $location = $_POST['location'] ?? '';
    $history = $_POST['history'] ?? '';

    $sql = "INSERT INTO `club` (club_name, location, history) 
            VALUES ('$club_name', '$location', '$history')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $club_id = mysqli_insert_id($conn);

        if (isset($_POST['emails']) && is_array($_POST['emails'])) {
            foreach ($_POST['emails'] as $email) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailSql = "INSERT INTO `club_email` (club_id, email) VALUES ('$club_id', '$email')";
                    mysqli_query($conn, $emailSql);
                }
            }
        }

        if (isset($_POST['phones']) && is_array($_POST['phones'])) {
            foreach ($_POST['phones'] as $phone) {
                if (preg_match('/^\+?[0-9]+$/', $phone)) {
                    $phoneSql = "INSERT INTO `club_phone_number` (club_id, phone_number) VALUES ('$club_id', '$phone')";
                    mysqli_query($conn, $phoneSql);
                }
            }
        }

        header('location:display-club.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Club</title>
</head>

<?php include('partials/header.php'); ?>

<body>
    <div class="text-center text-2xl font-bold m-6">
        <p>Register Club</p>
    </div>


    <form class="max-w-md mx-auto mt-2" method="post">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="club_name" name="club_name" value="<?php echo $_POST['club_name'] ?? ''; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="club_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Club
                Name</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="location" name="location" value="<?php echo $_POST['location'] ?? ''; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="location"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Location</label>
        </div>

        <div class="mb-5">
            <label for="history" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">History</label>
            <textarea id="history" name="history" rows="5"
                class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"><?php echo $_POST['history'] ?? ''; ?></textarea>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emails:</label>
            <?php
            $emails = $_POST['emails'] ?? [];
            for ($i = 0; $i < $num_emails; $i++) {
                $email_value = isset($emails[$i]) ? $emails[$i] : '';
                echo '<input type="email" name="emails[]" value="' . htmlspecialchars($email_value) . '" 
                    class="block w-full p-2 mb-2 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 text-sm" 
                    placeholder="Enter email" />';
            }
            ?>
            <button type="submit" name="add_email" class="mt-2 text-blue-600 underline">Add Another Email</button>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Numbers:</label>
            <?php
            $phones = $_POST['phones'] ?? [];
            for ($i = 0; $i < $num_phones; $i++) {
                $phone_value = isset($phones[$i]) ? $phones[$i] : '';
                echo '<input type="tel" name="phones[]" value="' . htmlspecialchars($phone_value) . '" 
                    class="block w-full p-2 mb-2 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 text-sm" 
                    placeholder="Enter phone number" />';
            }
            ?>
            <button type="submit" name="add_phone" class="mt-2 text-blue-600 underline">Add Another Phone
                Number</button>
        </div>

        <input type="hidden" name="num_emails" value="<?php echo $num_emails; ?>">
        <input type="hidden" name="num_phones" value="<?php echo $num_phones; ?>">

        <button type="submit" name="submit"
            class="w-full py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 dark:focus:ring-blue-700">
            Submit
        </button>
    </form>
</body>

</html>