<?php
include '../connect.php';

if (isset($_GET['deleteid'])) {
    $venue_id = $_GET['deleteid'];

    $sql = "DELETE FROM venue WHERE venue_id = $venue_id";
    if (mysqli_query($conn, $sql)) {
        header('Location: admin-display-venue.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No venue ID provided.";
    exit;
}

mysqli_close($conn);
?>