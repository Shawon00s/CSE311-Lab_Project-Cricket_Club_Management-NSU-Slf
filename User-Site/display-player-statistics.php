<?php
include '../connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Player Statistics</title>
</head>

<?php include('partials/header.php'); ?>

<body>


    <h1 class="text-center text-3xl font-extrabold p-6">Player Statistics</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Statistics NO.</th>
                    <th class="text-center">Runs Scores</th>
                    <th class="text-center">Wickets Taken</th>
                    <th class="text-center">Balls Faced</th>
                    <th class="text-center">No. of fours</th>
                    <th class="text-center">No. of sixes</th>
                    <th class="text-center">Overs Bowled</th>
                    <th class="text-center">Stumpings</th>
                    <th class="text-center">Run Outs</th>
                    <th class="text-center">Catches</th>
                    <th class="text-center">Player ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `playerstatistics`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $player_stats_id = $row['player_stats_id'];
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

                        echo '<tr>
                    <td class="text-center">' . $player_stats_id . '</td>
                    <td class="text-center">' . $runs_scored . '</td>
                    <td class="text-center">' . $wickets_taken . '</td>
                    <td class="text-center">' . $balls_faced . '</td>
                    <td class="text-center">' . $fours_hit . '</td>
                    <td class="text-center">' . $sixes_hit . '</td>
                    <td class="text-center">' . $overs_bowled . '</td>
                    <td class="text-center">' . $stumpings . '</td>
                    <td class="text-center">' . $run_outs . '</td>
                    <td class="text-center">' . $catches . '</td>
                    <td class="text-center">' . $player_id . '</td>
                </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>