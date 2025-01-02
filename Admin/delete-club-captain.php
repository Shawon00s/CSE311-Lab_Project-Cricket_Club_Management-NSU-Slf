<?php
include '../connect.php';

if (isset($_GET['deleteid'])) {
    $captain_id = $_GET['deleteid'];

    $sql_delete = "DELETE FROM club_captain WHERE captain_id = '$captain_id'";

    if (mysqli_query($conn, $sql_delete)) {
        header("Location: admin-display-club-captain.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No captain ID specified.";
}

mysqli_close($conn);
?>