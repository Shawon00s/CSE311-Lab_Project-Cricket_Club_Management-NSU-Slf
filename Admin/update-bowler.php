<?php
include '../connect.php';

if (isset($_GET['player_id'])) {
    $player_id = $_GET['player_id'];

    if (isset($_POST['update_bowler'])) {
        $bowling_style = $_POST['bowling_style'];

        $sql = "REPLACE INTO bowler (player_id, bowing_style) VALUES ($player_id, '$bowling_style')";
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
    <title>Update Bowler</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Update Player as Bowler</h1>
    <form method="POST" class="max-w-lg mx-auto p-6 shadow-lg bg-white rounded-lg">
        <div class="form-control mb-4">
            <label class="label">
                <span class="label-text">Bowling Style:</span>
            </label>
            <input type="text" name="bowling_style" class="input input-bordered w-full"
                placeholder="Enter bowling style" required>
        </div>
        <button type="submit" name="update_bowler" class="btn btn-primary w-full">Update Bowler</button>
    </form>
</body>

</html>