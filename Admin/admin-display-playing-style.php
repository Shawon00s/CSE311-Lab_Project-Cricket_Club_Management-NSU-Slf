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
    <title>Admin - Display Playing Style</title>
</head>

<?php include('partials/header.php'); ?>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Players - Playing Styles</h1>

    <div class="overflow-x-auto">
        <table class="table w-full">
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
                $sql = "SELECT * FROM player";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $player_id = $row['player_id'];
                        $player_name = $row['player_name'];
                        $date_of_birth = $row['date_of_birth'];
                        $nationality = $row['nationality'];

                        echo "
                            <tr>
                                <td class='text-center'>$player_id</td>
                                <td class='text-center'>$player_name</td>
                                <td class='text-center'>$date_of_birth</td>
                                <td class='text-center'>$nationality</td>
                                <td class='text-center'>
                                    <form action='update-playing-style.php' method='GET'>
                                        <input type='hidden' name='player_id' value='$player_id'>
                                        <select name='playing_style' class='select select-bordered w-full max-w-xs'>
                                            <option value='' disabled selected>Choose Style</option>
                                            <option value='batsman'>Batsman</option>
                                            <option value='bowler'>Bowler</option>
                                            <option value='allrounder'>All Rounder</option>
                                            <option value='wicketkeeper'>Wicketkeeper</option>
                                        </select>
                                        <button type='submit' class='btn btn-outline btn-primary mt-2'>
                                            Update
                                        </button>
                                    </form>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No players found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>