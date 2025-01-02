<?php
include '../connect.php';
?>

<?php include('partials/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin - Match Result</title>
</head>

<body>
    <h1 class="text-center text-3xl font-extrabold p-6">Match Result</h1>

    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="text-center">Match ID</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Result</th>
                    <th class="text-center">Functionality</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `match`";
                $matchResult = mysqli_query($conn, $sql);

                if ($matchResult) {
                    while ($row = mysqli_fetch_array($matchResult)) {
                        $match_id = $row['match_id'];
                        $date = $row['date'];
                        $time = $row['time'];
                        $result = $row['result'];

                        echo '<tr>
                        <td class="text-center">' . $match_id . '</td>
                        <td class="text-center">' . $date . '</td>
                        <td class="text-center">' . $time . '</td>
                        <td class="text-center">' . $result . '</td>
                        <td class="text-center">
                            <button class="btn btn-outline btn-success">
                                <a href="update-match.php?updateid=' . $match_id . '">Update</a>
                            </button>
                            <button class="btn btn-outline btn-error">
                                <a href="delete-match.php?deleteid=' . $match_id . '">Delete</a>
                            </button>
                        </td>
                    </tr>';
                    }
                } else {
                    echo '<tr><td colspan="5" class="text-center">No matches found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>