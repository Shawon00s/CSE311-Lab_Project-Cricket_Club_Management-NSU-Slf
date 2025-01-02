<?php
include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $club_id = $_POST['club_id'];
    $captain_id = $_POST['captain_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql_club_captain = "INSERT INTO club_captain (club_id, captain_id, start_date, end_date) 
                         VALUES ('$club_id', '$captain_id', '$start_date', '$end_date')";

    if (mysqli_query($conn, $sql_club_captain)) {
        header('Location: admin-display-club-captain.php');
    } else {
        echo "Error inserting into club_captain: " . mysqli_error($conn);
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
    <title>Add Club Captain</title>
</head>

<body>
    <div>
        <h1 class="font-bold text-2xl text-center mt-5">Add Club Captain</h1>
    </div>
    <form class="max-w-2xl mx-auto pt-6" action="admin-add-club-captain.php" method="POST">

        <div class="relative z-0 w-full mb-5 group">
            <input type="number" id="club_id"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required name="club_id" />
            <label for="club_id"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Club
                ID</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="number" id="captain_id"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required name="captain_id" />
            <label for="captain_id"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Captain
                ID</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="date" id="start_date"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required name="start_date" />
            <label for="start_date"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Start
                Date</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="date" id="end_date"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " name="end_date" />
            <label for="end_date"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">End
                Date</label>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>
    </form>
</body>

</html>