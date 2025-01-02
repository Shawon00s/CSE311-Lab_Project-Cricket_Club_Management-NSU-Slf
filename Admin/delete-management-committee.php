<?php
include '../connect.php';

if (isset($_GET['deleteid'])) {
    $committee_id = $_GET['deleteid'];

    $sql = "DELETE FROM `management_committee` WHERE committee_id = $committee_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location:admin-display-management-committee.php');
        exit();
    } else {
        die('Error: ' . mysqli_error($conn));
    }
}
?>