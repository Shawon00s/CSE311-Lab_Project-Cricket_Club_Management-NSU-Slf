<?php
$conn = mysqli_connect("localhost", "root", "", "cricket-club-managementdb");

if (!$conn) {
    die(mysqli_error($conn));
}
?>