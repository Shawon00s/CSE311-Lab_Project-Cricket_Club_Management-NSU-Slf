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
    <title>Players List</title>
</head>

<?php include('partials/header.php'); ?>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Players List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="pl-[130px]">Player ID</th>
                    <th class="pr-[130px]">Player Name</th>
                    <th class="pr-[130px]">Date of Birth</th>
                    <th>Nationality</th>
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
                        <td class="pl-[130px]">' . $player_id . '</td>
                        <td>' . $player_name . '</td>
                        <td>' . $date_of_birth . '</td>
                        <td>' . $nationality . '</td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>