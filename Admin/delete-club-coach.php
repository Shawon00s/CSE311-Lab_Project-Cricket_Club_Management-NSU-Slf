<?php
include '../connect.php';

if (isset($_GET['deleteid'])) {
    $coach_id = $_GET['deleteid'];

    $sql_delete = "DELETE FROM club_coach WHERE coach_id = '$coach_id'";

    if (mysqli_query($conn, $sql_delete)) {
        header("Location: admin-display-club-coach.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No coach ID specified.";
}

mysqli_close($conn);
?>