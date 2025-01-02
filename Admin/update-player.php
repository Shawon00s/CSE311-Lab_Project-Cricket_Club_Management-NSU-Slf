<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $player_id = $_GET['updateid'];

    $sql = "SELECT * FROM `player` WHERE player_id = $player_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $player = mysqli_fetch_assoc($result);
        $player_name = $player['player_name'];
        $date_of_birth = $player['date_of_birth'];
        $nationality = $player['nationality'];
    } else {
        die("Error: Player not found.");
    }
} else {
    die("Error: Player ID not provided in the URL.");
}

if (isset($_POST['update'])) {
    $player_name = $_POST['player_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $nationality = $_POST['nationality'];

    $sql = "UPDATE `player` 
            SET player_name='$player_name', date_of_birth='$date_of_birth', nationality='$nationality' 
            WHERE player_id=$player_id";

    if (mysqli_query($conn, $sql)) {
        header('Location: admin-display-player.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php include('partials/header-dark.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Player</title>
</head>

<body>
    <div>
        <h1 class="font-bold text-2xl text-center mt-5">Update Player</h1>
    </div>
    <form class="max-w-2xl mx-auto pt-6" method="POST">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="floating_name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required name="player_name" value="<?php echo htmlspecialchars($player_name); ?>" />
            <label for="floating_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Player
                Name</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="date" id="floating_date"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required name="date_of_birth" value="<?php echo htmlspecialchars($date_of_birth); ?>" />
            <label for="floating_date"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date
                Of Birth</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="floating_nationality"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required name="nationality" value="<?php echo htmlspecialchars($nationality); ?>" />
            <label for="floating_nationality"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nationality</label>
        </div>
        <button type="submit" name="update"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
    </form>
</body>

</html>