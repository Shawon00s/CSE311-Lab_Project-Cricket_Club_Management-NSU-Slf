<?php
include '../connect.php';
?>

<?php include('partials/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin-Player-List</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Players List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Player ID</th>
                    <th class="text-center">Player Name</th>
                    <th class="text-center">Date of Birth</th>
                    <th class="text-center">Nationality</th>
                    <th class="text-center">Functionality</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `player`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $player_id = $row['player_id'];
                        $player_name = $row['player_name'];
                        $date_of_birth = $row['date_of_birth'];
                        $nationality = $row['nationality'];

                        echo '<tr>
                        <td class="text-center">' . $player_id . '</td>
                        <td class="text-center">' . $player_name . '</td>
                        <td class="text-center">' . $date_of_birth . '</td>
                        <td class="text-center">' . $nationality . '</td>
                        <td class="text-center"> 
                        <button class="btn btn-outline btn-success"><a href="update-player.php?updateid=' . $player_id . ' ">Update</a></button>
                        <button class="btn btn-outline btn-error"><a href="delete-player.php?deleteid=' . $player_id . ' ">Delete</a></button>
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