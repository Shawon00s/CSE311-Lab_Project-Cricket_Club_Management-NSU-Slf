<?php
include '../connect.php';
if (isset($_GET['deleteid'])) {
    $player_id = $_GET['deleteid'];

    $sql1 = "DELETE FROM playerstatistics WHERE player_id = $player_id";
    mysqli_query($conn, $sql1);

    $sql2 = "delete from `player` where player_id=$player_id";
    $result = mysqli_query($conn, $sql2);
    if ($result) {
        header('location:admin-display-player.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>