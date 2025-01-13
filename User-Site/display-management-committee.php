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
    <title>Committee List</title>
</head>

<?php include('partials/header.php'); ?>

<body>

    <h1 class="text-center text-3xl font-extrabold p-6">Committee List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th>Committee ID</th>
                    <th class="pr-[130px]">Member Name</th>
                    <th class="pr-[130px]">Role</th>
                    <th class="pr-[130px]">Contact Info</th>
                    <th class="pr-[130px]">Start Date</th>
                    <th class="pr-[130px]">End Date</th>
                    <th>Club ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `management_committee`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $committee_id = $row['committee_id'];
                        $member_name = $row['member_name'];
                        $role = $row['role'];
                        $contact_info = $row['contact_info'];
                        $start_date = $row['start_date'];
                        $end_date = $row['end_date'];
                        $club_id = $row['club_id'];

                        echo '<tr>
                        <td>' . $committee_id . '</td>
                        <td>' . $member_name . '</td>
                        <td>' . $role . '</td>
                        <td>' . $contact_info . '</td>
                        <td>' . $start_date . '</td>
                        <td>' . $end_date . '</td>
                        <td>' . $club_id . '</td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>