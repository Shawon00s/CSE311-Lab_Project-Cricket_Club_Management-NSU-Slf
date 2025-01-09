<?php
include '../connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Club List</title>
</head>

<?php include('partials/header.php'); ?>

<body>
    <div>
        <p class="text-center text-3xl font-bold m-4">Club List</p>
    </div>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Club ID</th>
                    <th class="text-center">Club Name</th>
                    <th class="text-center">Location</th>
                    <th class="w-1/6 text-center">History</th>
                    <th class="text-center">Phone Numbers</th>
                    <th class="text-center">Emails</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT 
                            club.club_id, 
                            club.club_name, 
                            club.location, 
                            club.history, 
                            GROUP_CONCAT(DISTINCT club_phone_number.phone_number SEPARATOR ', ') AS phone_numbers, 
                            GROUP_CONCAT(DISTINCT club_email.email SEPARATOR ', ') AS emails
                        FROM club
                        LEFT JOIN club_phone_number ON club.club_id = club_phone_number.club_id
                        LEFT JOIN club_email ON club.club_id = club_email.club_id
                        GROUP BY club.club_id";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $club_id = $row['club_id'];
                        $club_name = $row['club_name'];
                        $location = $row['location'];
                        $history = $row['history'];
                        $phone_numbers = $row['phone_numbers'] ?? 'N/A'; // Handle null values
                        $emails = $row['emails'] ?? 'N/A'; // Handle null values
                
                        echo '<tr>
                            <td class="text-center">' . $club_id . '</td>
                            <td class="text-center">' . $club_name . '</td>
                            <td class="text-center">' . $location . '</td>
                            <td class="text-center">' . $history . '</td>
                            <td class="text-center">' . $phone_numbers . '</td>
                            <td class="text-center">' . $emails . '</td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="8" class="text-center">No data found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>