<?php
if (isset($_GET['player_id']) && isset($_GET['playing_style'])) {
    $player_id = $_GET['player_id'];
    $playing_style = $_GET['playing_style'];

    switch ($playing_style) {
        case 'batsman':
            header("Location: update-batsman.php?player_id=$player_id");
            break;
        case 'bowler':
            header("Location: update-bowler.php?player_id=$player_id");
            break;
        case 'allrounder':
            header("Location: update-allrounder.php?player_id=$player_id");
            break;
        case 'wicketkeeper':
            header("Location: update-wicketkeeper.php?player_id=$player_id");
            break;
        default:
            echo "Invalid playing style selected.";
    }
    exit();
} else {
    echo "Player ID or playing style not provided.";
}
?>