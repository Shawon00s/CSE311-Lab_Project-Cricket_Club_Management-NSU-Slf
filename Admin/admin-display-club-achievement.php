<?php
include '../connect.php';

$sql = "SELECT ca.achievement_name, ca.date, ca.description, c.club_name 
        FROM club_achievements ca
        JOIN club c ON ca.club_id = c.club_id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error fetching achievements: " . mysqli_error($conn));
}

mysqli_close($conn);
?>

<?php include('partials/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Club Achievements</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Club Achievements List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Club Name</th>
                    <th class="text-center">Achievement Name</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $club_name = $row['club_name'];
                        $achievement_name = $row['achievement_name'];
                        $date = $row['date'];
                        $description = $row['description'];

                        echo '<tr>
                            <td class="text-center">' . htmlspecialchars($club_name) . '</td>
                            <td class="text-center">' . htmlspecialchars($achievement_name) . '</td>
                            <td class="text-center">' . $date . '</td>
                            <td class="text-center">' . htmlspecialchars($description) . '</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>