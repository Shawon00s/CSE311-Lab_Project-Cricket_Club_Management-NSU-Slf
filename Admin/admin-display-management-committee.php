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
    <title>Committee List</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Management Members List</h1>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Committee ID</th>
                    <th class="text-center">Member Name</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Contact Info</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Club ID</th>
                    <th class="text-center">Functionality</th>
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
                        <td class="text-center">' . $committee_id . '</td>
                        <td class="text-center">' . $member_name . '</td>
                        <td class="text-center">' . $role . '</td>
                        <td class="text-center">' . $contact_info . '</td>
                        <td class="text-center">' . $start_date . '</td>
                        <td class="text-center">' . $end_date . '</td>
                        <td class="text-center">' . $club_id . '</td>
                        <td class="text-center"> 
                        <button class="btn btn-outline btn-success"><a href="update-management-committee.php?updateid=' . $committee_id . ' ">Update</a></button>
                        <button class="btn btn-outline btn-error"><a href="delete-management-committee.php?deleteid=' . $committee_id . ' ">Delete</a></button>
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
