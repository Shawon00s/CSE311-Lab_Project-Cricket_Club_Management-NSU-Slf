<?php
include '../connect.php';

if (isset($_GET['deleteid'])) {
    $player_stats_id = $_GET['deleteid'];

    $sql = "DELETE FROM `playerstatistics` WHERE player_stats_id = $player_stats_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: admin-display-player-statistics.php');
        exit();
    } else {
        die('Error: ' . mysqli_error($conn));
    }
} else {
    header('Location: admin-display-player-statistics.php');
    exit();
}
?>