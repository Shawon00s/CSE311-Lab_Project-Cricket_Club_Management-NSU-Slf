<?php
include '../connect.php';

$sql = "SELECT cc.coach_id, c.club_name, cc.coach_name, cc.start_date, cc.end_date 
        FROM club_coach cc 
        JOIN club c ON cc.club_id = c.club_id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Club Coaches List</title>
</head>

<?php include('partials/header.php'); ?>

<body>

    <h1 class="text-center text-3xl font-extrabold p-6">Club Coaches List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Club Name</th>
                    <th class="text-center">Coach Name</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $club_name = htmlspecialchars($row['club_name']);
                        $coach_name = htmlspecialchars($row['coach_name']);
                        $start_date = htmlspecialchars($row['start_date']);
                        $end_date = $row['end_date'] ? htmlspecialchars($row['end_date']) : "Ongoing";

                        echo '<tr>
                        <td class="text-center">' . $club_name . '</td>
                        <td class="text-center">' . $coach_name . '</td>
                        <td class="text-center">' . $start_date . '</td>
                        <td class="text-center">' . $end_date . '</td>
                    </tr>';
                    }
                } else {
                    echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>