<?php
include '../connect.php';

if (isset($_GET['deleteid'])) {
    $match_id = $_GET['deleteid'];

    $delete_match_sql = "DELETE FROM `match` WHERE match_id = $match_id";
    if (mysqli_query($conn, $delete_match_sql)) {
        header('Location: admin-display-match.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>