<?php
include '../connect.php';

if (isset($_GET['updateid'])) {
    $venue_id = $_GET['updateid'];

    $sql = "SELECT * FROM venue WHERE venue_id = $venue_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $venue_name = $row['venue_name'];
    $location = $row['location'];
    $capacity = $row['capacity'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $venue_name = $_POST['venue_name'];
        $location = $_POST['location'];
        $capacity = $_POST['capacity'];

        $update_sql = "UPDATE venue SET venue_name='$venue_name', location='$location', capacity='$capacity' WHERE venue_id=$venue_id";
        if (mysqli_query($conn, $update_sql)) {
            header('Location: admin-display-venue.php');
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "No venue ID provided.";
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
    <title>Update Venue</title>
</head>

<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-8">Update Venue</h1>

        <form action="" method="POST" class="max-w-xl mx-auto">
            <div class="form-control mb-4">
                <label class="label">Venue Name</label>
                <input type="text" name="venue_name" value="<?php echo $venue_name; ?>" class="input input-bordered"
                    required />
            </div>
            <div class="form-control mb-4">
                <label class="label">Location</label>
                <input type="text" name="location" value="<?php echo $location; ?>" class="input input-bordered"
                    required />
            </div>
            <div class="form-control mb-4">
                <label class="label">Capacity</label>
                <input type="number" name="capacity" value="<?php echo $capacity; ?>" class="input input-bordered"
                    required />
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>

</html>