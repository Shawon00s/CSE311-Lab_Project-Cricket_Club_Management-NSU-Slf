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
    <title>Venue List</title>
</head>

<?php include('partials/header.php'); ?>

<body>

    <h1 class="text-center text-3xl font-extrabold p-6">Venue List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"">Venue ID</th>
                    <th class=" text-center"">Venue Name</th>
                    <th class="text-center"">Capacity</th>
                    <th class=" text-center">Location</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `venue`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $venue_id = $row['venue_id'];
                        $venue_name = $row['venue_name'];
                        $capacity = $row['capacity'];
                        $location = $row['location'];

                        echo '<tr>
                        <td class="text-center">' . $venue_id . '</td>
                        <td class="text-center">' . $venue_name . '</td>
                        <td class="text-center">' . $capacity . '</td>
                        <td class="text-center">' . $location . '</td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>