<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $committee_id = $_GET['updateid'];

    $sql = "SELECT * FROM `management_committee` WHERE committee_id=$committee_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $member_name = $row['member_name'];
        $role = $row['role'];
        $contact_info = $row['contact_info'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
        $club_id = $row['club_id'];
    } else {
        die("Committee member not found.");
    }
} else {
    die("Error: Committee ID not provided in the URL.");
}

if (isset($_POST['update'])) {
    $member_name = $_POST['member_name'];
    $role = $_POST['role'];
    $contact_info = $_POST['contact_info'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $club_id = $_POST['club_id'];

    $sql = "UPDATE `management_committee` 
            SET member_name='$member_name', 
                role='$role', 
                contact_info='$contact_info', 
                start_date='$start_date', 
                end_date='$end_date', 
                club_id='$club_id' 
            WHERE committee_id=$committee_id";

    if (mysqli_query($conn, $sql)) {
        header('Location: admin-display-management-committee.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<?php include('partials/header-dark.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Committee Member</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Update Committee Member</h1>

    <form class="max-w-lg mx-auto mt-5" method="POST">
        <div class="mb-5">
            <label for="member_name" class="block mb-2 text-sm font-medium">Member Name</label>
            <input type="text" id="member_name" name="member_name" value="<?php echo htmlspecialchars($member_name); ?>"
                class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-5">
            <label for="role" class="block mb-2 text-sm font-medium">Role</label>
            <input type="text" id="role" name="role" value="<?php echo htmlspecialchars($role); ?>"
                class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-5">
            <label for="contact_info" class="block mb-2 text-sm font-medium">Contact Info</label>
            <input type="text" id="contact_info" name="contact_info"
                value="<?php echo htmlspecialchars($contact_info); ?>" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-5">
            <label for="start_date" class="block mb-2 text-sm font-medium">Start Date</label>
            <input type="date" id="start_date" name="start_date" value="<?php echo htmlspecialchars($start_date); ?>"
                class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-5">
            <label for="end_date" class="block mb-2 text-sm font-medium">End Date</label>
            <input type="date" id="end_date" name="end_date" value="<?php echo htmlspecialchars($end_date); ?>"
                class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-5">
            <label for="club_id" class="block mb-2 text-sm font-medium">Club ID</label>
            <input type="number" id="club_id" name="club_id" value="<?php echo htmlspecialchars($club_id); ?>"
                class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" name="update" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
            Update
        </button>
    </form>
</body>

</html>