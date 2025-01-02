<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $player_stats_id = $_GET['updateid'];

    $sql = "SELECT * FROM `playerstatistics` WHERE player_stats_id = $player_stats_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $runs_scored = $row['runs_scored'];
        $wickets_taken = $row['wickets_taken'];
        $balls_faced = $row['balls_faced'];
        $fours_hit = $row['fours_hit'];
        $sixes_hit = $row['sixes_hit'];
        $overs_bowled = $row['overs_bowled'];
        $stumpings = $row['stumpings'];
        $run_outs = $row['run_outs'];
        $catches = $row['catches'];
        $player_id = $row['player_id'];
    } else {
        die('Error: Player statistics not found.');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $runs_scored = $_POST['runs_scored'];
    $wickets_taken = $_POST['wickets_taken'];
    $balls_faced = $_POST['balls_faced'];
    $fours_hit = $_POST['fours_hit'];
    $sixes_hit = $_POST['sixes_hit'];
    $overs_bowled = $_POST['overs_bowled'];
    $stumpings = $_POST['stumpings'];
    $run_outs = $_POST['run_outs'];
    $catches = $_POST['catches'];

    $sql = "UPDATE `playerstatistics` SET 
        runs_scored = '$runs_scored', 
        wickets_taken = '$wickets_taken', 
        balls_faced = '$balls_faced', 
        fours_hit = '$fours_hit', 
        sixes_hit = '$sixes_hit', 
        overs_bowled = '$overs_bowled', 
        stumpings = '$stumpings', 
        run_outs = '$run_outs', 
        catches = '$catches' 
        WHERE player_stats_id = $player_stats_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: admin-display-player-statistics.php');
        exit();
    } else {
        die('Error: ' . mysqli_error($conn));
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
    <title>Update Player Statistics</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Update Player Statistics</h1>

    <form class="max-w-4xl mx-auto p-6 space-y-4" method="POST">
        <div class="form-control">
            <label class="label"><span class="label-text">Runs Scored</span></label>
            <input type="number" name="runs_scored" class="input input-bordered" value="<?php echo $runs_scored; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Wickets Taken</span></label>
            <input type="number" name="wickets_taken" class="input input-bordered" value="<?php echo $wickets_taken; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Balls Faced</span></label>
            <input type="number" name="balls_faced" class="input input-bordered" value="<?php echo $balls_faced; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">No. of Fours</span></label>
            <input type="number" name="fours_hit" class="input input-bordered" value="<?php echo $fours_hit; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">No. of Sixes</span></label>
            <input type="number" name="sixes_hit" class="input input-bordered" value="<?php echo $sixes_hit; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Overs Bowled</span></label>
            <input type="number" name="overs_bowled" class="input input-bordered" value="<?php echo $overs_bowled; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Stumpings</span></label>
            <input type="number" name="stumpings" class="input input-bordered" value="<?php echo $stumpings; ?>"
                required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Run Outs</span></label>
            <input type="number" name="run_outs" class="input input-bordered" value="<?php echo $run_outs; ?>" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Catches</span></label>
            <input type="number" name="catches" class="input input-bordered" value="<?php echo $catches; ?>" required>
        </div>
        <div class="form-control">
            <button type="submit" class="btn btn-primary mt-4">Update</button>
        </div>
    </form>
</body>

</html>