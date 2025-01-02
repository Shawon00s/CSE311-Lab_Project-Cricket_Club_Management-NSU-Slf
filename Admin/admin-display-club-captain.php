<?php
include '../connect.php';

$sql = "SELECT cc.club_id, cc.captain_id, cc.start_date, cc.end_date, p.player_name, c.club_name 
        FROM club_captain cc
        JOIN player p ON cc.captain_id = p.player_id
        JOIN club c ON cc.club_id = c.club_id";

$result = mysqli_query($conn, $sql);
?>

<?php include('partials/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin-Club-Captains</title>
</head>

<body>

    <h1 class="text-center text-3xl font-extrabold p-6">Club Captains List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Club Name</th>
                    <th class="text-center">Player Name</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Functionality</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $club_name = $row['club_name'];
                        $player_name = $row['player_name'];
                        $start_date = $row['start_date'];
                        $end_date = $row['end_date'];

                        echo '<tr>
                        <td class="text-center">' . htmlspecialchars($club_name) . '</td>
                        <td class="text-center">' . $player_name . '</td>
                        <td class="text-center">' . $start_date . '</td>
                        <td class="text-center">' . $end_date . '</td>
                        <td class="text-center"> 
                            <button class="btn btn-outline btn-success"><a href="update-club-captain.php?updateid=' . $row['captain_id'] . '">Update</a></button>
                            <button class="btn btn-outline btn-error"><a href="delete-club-captain.php?deleteid=' . $row['captain_id'] . '">Delete</a></button>
                        </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>