<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>Control Panel</title>
</head>

<body>

    <div class="navbar bg-[#38bdf8]">
        <div class="navbar-start">
        </div>
        <div class="navbar-center">
            <a class="text-2xl font-bold" href="main.php">Admin Panel</a>
        </div>
        <div class="navbar-end">
            <div class="flex justify-start">
                <ul class="menu menu-horizontal px-1 ">
                    <li>
                        <details>
                            <summary><i class="fa-solid fa-gear"></i></summary>
                            <ul class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-xl bg-white shadow-lg ring-1 ring-black/5 focus:outline-none bg-gradient-to-r from-indigo-400 to-cyan-400 text-black"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <li><a class="hover:bg-gray-200" href="admin-add-transfer.php">Add Transfer</a></li>
                                <li><a class="hover:bg-gray-200" href="admin-add-club-captain.php">Add Captain</a></li>
                                <li><a class="hover:bg-gray-200" href="admin-add-club-coach.php">Add Coach</a></li>
                                <li><a class="hover:bg-gray-200" href="admin-add-club-achievement.php">Add Club
                                        Achievement</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-gradient-to-r from-blue-200 to-cyan-200 grid grid-cols-3 p-3 pl-20 gap-5 pt-7">
        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Clubs!</h2>
                <p>Find out all the clubs</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-club.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Players!</h2>
                <p>Explore the roster of players in the club</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-player.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Player Statistics!</h2>
                <p>Check out the performance and stats of players</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-player-statistics.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Club Captains!</h2>
                <p>Meet the leader of the team</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-club-captain.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Club Coaches!</h2>
                <p>Learn more about the mastermind behind the team's strategy</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-club-coach.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Match Results!</h2>
                <p>Learn more about the match results</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-match.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Venue!</h2>
                <p>Discover where the action takes place</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-venue.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Management Committee!</h2>
                <p>Learn about the leaders managing the club</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"
                        onclick="window.location.href='admin-display-management-committee.php'">View</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Update playing style!</h2>
                <p>Update the unique playing style of the club</p>
                <div class="card-actions justify-end" onclick="window.location.href='admin-display-playing-style.php'">
                    <button class="btn btn-primary">View</button>
                </div>
            </div>
        </div>

    </div>

</body>

</html>

<?php include('partials/footer.php'); ?>