<?php
include '../connect.php';

$sql = "SELECT batsman.player_id, player.player_name, batsman.order_no, batsman.batting_style 
        FROM batsman 
        INNER JOIN player ON batsman.player_id = player.player_id";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Batsman Details</title>
</head>

<?php include('partials/header.php'); ?>

<body>

    <h1 class="text-center text-3xl font-extrabold p-6">Batsman Details</h1>

    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="text-center">Player ID</th>
                    <th class="text-center">Player Name</th>
                    <th class="text-center">Order No</th>
                    <th class="text-center">Batting Style</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $player_id = $row['player_id'];
                        $player_name = $row['player_name'];
                        $order_no = $row['order_no'];
                        $batting_style = $row['batting_style'];

                        echo "
                            <tr>
                                <td class='text-center'>$player_id</td>
                                <td class='text-center'>$player_name</td>
                                <td class='text-center'>$order_no</td>
                                <td class='text-center'>$batting_style</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No batsman data found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>