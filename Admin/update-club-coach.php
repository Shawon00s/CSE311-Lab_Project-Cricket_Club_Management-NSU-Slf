<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $coach_id = $_GET['updateid'];

    $sql = "SELECT * FROM club_coach WHERE coach_id = '$coach_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $club_id = $row['club_id'];
        $coach_name = $row['coach_name'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
    } else {
        echo "Record not found.";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $club_id = $_POST['club_id'];
    $coach_name = $_POST['coach_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $update_sql = "UPDATE club_coach 
                   SET club_id = '$club_id', coach_name = '$coach_name', start_date = '$start_date', end_date = '$end_date' 
                   WHERE coach_id = '$coach_id'";

    if (mysqli_query($conn, $update_sql)) {
        header("Location: admin-display-club-coach.php");
        exit();
    } else {
        echo "Error updating club coach: " . mysqli_error($conn);
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
    <title>Update Club Coach</title>
</head>

<body>
    <div>
        <h1 class="text-center text-3xl font-extrabold p-6">Update Club Coach</h1>
    </div>
    <form class="max-w-2xl mx-auto pt-6" method="POST">
        <div class="relative z-0 w-full mb-5 group">
            <input type="number" id="club_id" name="club_id" value="<?php echo $club_id; ?>" required
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="club_id"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Club ID</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="coach_name" name="coach_name" value="<?php echo $coach_name; ?>" required
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="coach_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Coach Name</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="date" id="start_date" name="start_date" value="<?php echo $start_date; ?>" required
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="start_date"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Start Date</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="date" id="end_date" name="end_date" value="<?php echo $end_date; ?>"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="end_date"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                End Date</label>
        </div>
        <button type="submit" class="btn btn-primary w-full">Update</button>
    </form>
</body>

</html>