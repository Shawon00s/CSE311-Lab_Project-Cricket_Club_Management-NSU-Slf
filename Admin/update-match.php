<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $match_id = $_GET['updateid'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $result = $_POST['result'];

        $update_match_sql = "UPDATE `match` SET date = '$date', time = '$time', result = '$result' WHERE match_id = $match_id";
        if (mysqli_query($conn, $update_match_sql)) {
            header('Location: admin-display-match.php');
            exit;
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        $fetch_match_sql = "SELECT * FROM `match` WHERE match_id = $match_id";
        $result = mysqli_query($conn, $fetch_match_sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $date = $row['date'];
            $time = $row['time'];
            $result_text = $row['result'];
        } else {
            echo "Match not found.";
            exit;
        }
    }
} else {
    echo "Invalid Match ID.";
    exit;
}

mysqli_close($conn);
?>

<?php include('partials/header-dark.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Match</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Update Match</h1>
    <form method="POST" class="max-w-md mx-auto p-4 border border-gray-300 rounded-md">
        <div class="form-control">
            <label class="label">Match Date:</label>
            <input type="date" name="date" value="<?php echo htmlspecialchars($date); ?>" class="input input-bordered"
                required>
        </div>
        <div class="form-control">
            <label class="label">Match Time:</label>
            <input type="time" name="time" value="<?php echo htmlspecialchars($time); ?>" class="input input-bordered"
                required>
        </div>
        <div class="form-control">
            <label class="label">Result:</label>
            <input type="text" name="result" value="<?php echo htmlspecialchars($result_text); ?>"
                class="input input-bordered" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Update Match</button>
    </form>
</body>

</html>