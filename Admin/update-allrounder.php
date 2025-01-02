<?php
include '../connect.php';

if (isset($_GET['player_id'])) {
    $player_id = $_GET['player_id'];

    if (isset($_POST['update_allrounder'])) {
        $batting_style = $_POST['batting_style'];
        $bowling_style = $_POST['bowling_style'];

        $sql = "REPLACE INTO allrounder (player_id, batting_style, bowling_style) VALUES ($player_id, '$batting_style', '$bowling_style')";
        if (mysqli_query($conn, $sql)) {
            header('Location: admin-display-playing-style.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    die("Player ID not provided.");
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
    <title>Update All Rounder</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Update Player as All Rounder</h1>
    <form method="POST" class="max-w-lg mx-auto p-6 shadow-lg bg-white rounded-lg">
        <div class="form-control mb-4">
            <label class="label">
                <span class="label-text">Batting Style:</span>
            </label>
            <input type="text" name="batting_style" class="input input-bordered w-full"
                placeholder="Enter batting style" required>
        </div>
        <div class="form-control mb-4">
            <label class="label">
                <span class="label-text">Bowling Style:</span>
            </label>
            <input type="text" name="bowling_style" class="input input-bordered w-full"
                placeholder="Enter bowling style" required>
        </div>
        <button type="submit" name="update_allrounder" class="btn btn-primary w-full">Update All Rounder</button>
    </form>
</body>

</html>